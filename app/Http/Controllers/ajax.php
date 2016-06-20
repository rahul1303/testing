<?php

namespace App\Http\Controllers;

use App\venue_type;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use  App\booked_date;
use App\combo;
use App\promo;
use App\subscribe;
use App\feedback;
use App\booking_event;
use App\forum;
use App\bill;
use Illuminate\Support\Facades\URL;
use App\vendor_model;
use App\image;
use Illuminate\Support\Facades\Response;
use DateTime;
use DateInterval;
use App\cancelOrder;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
class ajax extends Controller
{

    /*
     * $window variable is used to check the time slot available or not this value is in minutes
     */

    protected $window='45';


    /*
     * cancel the order after entering correct otp.
     * 15% of total cost is being charges
     */
    public function cancelOrder(){
        $current_date=date('Y-m-d h:i:s A');
        $ticket=Input::get('ticket');
        $id=booking_event::where('client_id','LIKE',$ticket)->value('id');
        $total_cost=bill::where('booking_id','LIKE',$id)->value('total_cost');
        $final_cost=bill::where('booking_id','LIKE',$id)->value('final_cost');
        $cancel_charge=($final_cost*3)/20;
        $count=cancelOrder::where('booking_id','LIKE',$id)->count();
        if($count>0){
            return Response::json('Your order has already been cancelled');
        }
        booking_event::where('client_id','LIKE',$ticket)->update(['cancellation'=>'Yes']);
        bill::where('booking_id','LIKE',$id)->update(['cancellation'=>'Yes']);
        cancelOrder::insert([
            'booking_id'=>$id,
            'total_cost'=>$total_cost,
            'final_cost'=>$final_cost,
            'cancellation_charges'=>$cancel_charge,
            'date'=>$current_date,
        ]);

        $info=booking_event::where('client_id','LIKE',$ticket)->first();
        Mail::queue('emails.order_cancel', array('info' => $info,'ticket'=>$ticket,'final'=>$final_cost), function ($m) use ($info) {
            $m->from('mail@bashindia.com', 'Sales Team BashIndia');

            $m->to($info->email)->subject('Order Cancel');
        });
        $mobile=vendor_model::where('id','LIKE',$info->vendor_id)->value('mobile');
        $message="Dear ".$info->client_name.
            " Your order ".$ticket." has been cancelled.Our sales team will contact you soon.";
        $this->sms($info->mobile,$message);         // send message to customer regarding order cancellation
        $message=$info->client_name." with order:".$ticket." has cancelled his order.";
        $this->sms("8800355421",$message);          //send message to bashdindia
        $this->sms($mobile,$message);               //send message to vendor
        return Response::json('Your order has been cancelled.Remaining amount will be refunded in 48 hour.');
    }
    /*
     * send otp for order cancellation and its validation
     */
    public function cancelOrderOtp(){
        $ticket=Input::get('ticket');
        $receive=Input::get('receive');
        $count=booking_event::where('client_id','LIKE',$ticket)->count();
        $otp='';
        if($count=='0'){
            return Response::json('Please enter correct ticket number.;;'.$otp);
        }
        $count=booking_event::where('client_id','LIKE',$ticket)->where('cancellation','LIKE','Yes')->count();
        if($count=='1'){
            return Response::json('This ticket order is already cancelled.');
        }
        $party_date=booking_event::where('client_id','LIKE',$ticket)->value('party_booking_date');
        $current_date=date('Y-m-d h:i:s A');
        if($current_date>=$party_date){
            return Response::json('Sorry. You can not cancel this order as the order cancellation can be done only 1 day before the booking date.;;'.$otp);
        }
        $otp=rand(100000,999999);
        if($receive=='email'){
            $email=booking_event::where('client_id','LIKE',$ticket)->value('email');
            Mail::send('emails.otp', ['otp' => $otp], function ($m) use ($email) {
                $m->from('mail@bashindia.com', 'Sales Team BashIndia');

                $m->to($email)->subject('OTP for order cancellation');
            });
            $email=str_limit($email,4);
            return Response::json('OTP sent to '.$email.'@...com email id successfully.;;'.$otp);
        }
        else if($receive=='whatsapp'){
            $phone=booking_event::where('client_id','LIKE',$ticket)->value('mobile');
            $message="Order cancellation 6 digit OTP ".$otp;
            $this->sms($phone,$message);
            $phone=str_limit($phone,4);
            return Response::json('OTP sent to +91'.$phone.' mobile number  successfully.;;'.$otp);
        }
    }
    /*
     * this function in on second page ie on map.This function is used when no venue is show a form will appear in
     *  which user will enteer its number and name and we will recieve a sms containing info of client
     */
    public  function help(){
        $name=Input::get('name');
        $number=Input::get('number');
        $url=Input::get('url');
        $this->sms("9654182422",$name.' '.$number.' '.$url);          //send message to bashindia regarding searching of venue
        return Response::json('Thanks for your query.We will get you as soon as possible.'); }
    /*
     * it is used for sorting of venue on second page.
     */
    public function relevance(){
        $attribute=Input::get('r');
        if($attribute=='c'){
            $attribute='capacity';
        }
        $capacity=Input::get('capacity');
        $budget=Input::get('budget');
        if($budget=='5000'){
            $budget='5000';
            $a='5000';
            $b='100000';
        }
        else if($budget=='budget'){
            $a='0';
            $b='100000';
        }
        else{
            $budget=explode("-",$budget);
            $a=$budget[0];
            $b=$budget[1];
        }
        if($capacity=='500'){
            $capacity='500';
            $c='500';
            $d='10000';
        }
        else if($capacity=='capacity'){
            $c='0';
            $d='10000';
        }
        else
        {
            $capacity=explode("-",$capacity);
            $c=$capacity[0];
            $d=$capacity[1];
        }
        $type=Input::has('type')?Input::get('type'):'%';
        $location=Input::has('location')?Input::get('location'):'%';
        $relevance=vendor_model::where('venue_type','LIKE',$type)->whereBetween('rupee', [$a,$b])->whereBetween('capacity', [$c,$d])->where('city','LIKE',$location)->orderBy($attribute,'ASC')->get();;
        return Response::json($relevance);
    }
   public function budget(){
        $id=Input::get('id');
        $id=combo::where('vendor_id','LIKE',$id)->get();
        return Response::json($id);
    }
    public function image(){
        $id=Input::get('id');
        $id=image::where('vendor_id','LIKE',$id)->get();
        return Response::json($id);
    }
    public function latlon(){
        $id=Input::get('id');
        $id=vendor_model::where('id','LIKE',$id)->first();
        return Response::json($id);
    }
    public function invoice(){
        $id=Input::get('id');
        $y=Input::get('y');
        bill::where('booking_id','LIKE',$id)->update([
            'if_money'=>$y,
        ]);
    }
    public function forum(){
        $id=Input::get('id');
        $y=Input::get('y');
        $m=Input::get('message');
        forum::where('vendor_id','LIKE',$id)->where('message','LIKE',$m)->update([
            'show'=>$y,
        ]);
    }
    /*
     * FOr customer to share your review on individual venue page
     */
    public function share(){
        $id=Input::get('id');
        $name=Input::get('name');
        $email=Input::get('email');
        $message=Input::get('message');
        $datetime=Input::get('date');
        forum::insert([
            'vendor_id'=>$id,
            'name'=>$name,
            'email'=>$email,
            'message'=>$message,
            'created_at'=>$datetime
        ]);
        $c=subscribe::where('email','LIKE',$email)->count();
        if($c>'0'){}
        else{
            subscribe::insert([
                'email'=>$email
            ]);
        }
        return Response::json($name.';'.$email.';'.$message.';'.$datetime);
    }
    public function ended(){
            $val=Input::get('val');
            $id=Input::get('id');
            booking_event::where('id','LIKE',$id)->update(['completed_successfully'=>$val]);
            flash()->overlay('Responed Successully','Success');
            return redirect('/');
    }
    public function responded(){
        $val=Input::get('val');
        $id=Input::get('id');
        booking_event::where('id','LIKE',$id)->update(['manager_respond'=>$val]);
        flash()->overlay('Responed Successully','Success');
        return redirect('/');
    }
    /*
     * send feedback by user on website
     */
    public function feedback(){
        $feedback=Input::get('message');
        feedback::insert([
            'message'=>$feedback
        ]);
        return Response::json($feedback);
    }
    /*
     * user to subscribe our website
     */
    public function subscribe(){
        $email=Input::get('email');
        $count=subscribe::where('email','LIKE',$email)->count();
        if($count>'0'){
            return Response::json('You are already subscribed');
        }else{
            subscribe::insert([
                'email'=>$email
            ]);
            return Response::json('Thanks for subscribing');
        }
    }
    /*
     * to checck if promo available for client or not
     */
    public function promo(){
        $date=Input::get('date');
        $promo=Input::get('promo');
        $id=Input::get('id');
        $buffet=Input::get('buffet');
        $c=promo::where('code','LIKE',$promo)->where('vendor_id','LIKE',$id)->where('buffet','LIKE',$buffet)->where('valid','>=',$date)->value('amount');
        $check_id=promo::where('code','LIKE',$promo)->where('valid','>=',$date)->value('vendor_id');
        if($check_id=='0'){
            $c=promo::where('code','LIKE',$promo)->where('valid','>=',$date)->value('amount');
            $allowed=promo::where('code','LIKE',$promo)->where('valid','>=',$date)->value('allowed');
            $applied=promo::where('code','LIKE',$promo)->where('valid','>=',$date)->value('applied');
            $val=promo::where('code','LIKE',$promo)->where('valid','>=',$date)->count();
            $exit=promo::where('code','LIKE',$promo)->count();
            return Response::json($c.',;'.$val.',;'.$exit.',;'.$allowed.',;'.$applied.',;'.$check_id);
        }
        $allowed=promo::where('code','LIKE',$promo)->where('vendor_id','LIKE',$id)->where('buffet','LIKE',$buffet)->where('valid','>=',$date)->value('allowed');
        $applied=promo::where('code','LIKE',$promo)->where('vendor_id','LIKE',$id)->where('buffet','LIKE',$buffet)->where('valid','>=',$date)->value('applied');
        $val=promo::where('code','LIKE',$promo)->where('vendor_id','LIKE',$id)->where('buffet','LIKE',$buffet)->where('valid','>=',$date)->count();
        $exit=promo::where('code','LIKE',$promo)->where('vendor_id','LIKE',$id)->where('buffet','LIKE',$buffet)->count();
        return Response::json($c.',;'.$val.',;'.$exit.',;'.$allowed.',;'.$applied.',;'.$check_id);
    }
    /*
     * get the combo on booking page
     */
    public function combo(){
        $combo=Input::get('combo');
        $id=Input::get('id');
        $c=combo::where('vendor_id','LIKE',$id)->where('combo','LIKE',$combo)->get();
        return Response::json($c);
    }
    /*
     * check if date $ time available for booking or not
     */
    public function date(){
        $date=Input::get('date');
        $id=Input::get('id');
        $count=booked_date::where('vendor_id','LIKE',$id)->where('date','LIKE',$date)->count();
        $restaurant_count=venue_type::where('vendor_id','LIKE',$id)->where('types','LIKE','restaurant')->count();
        if($restaurant_count=='0'){
            if($count>'0'){
                $time=booked_date::where('vendor_id','LIKE',$id)->where('date','LIKE',$date)->get();
                return Response::json($time);
            }
        }
        return Response::json('Available');
    }
    /*
 * check if time is present or not
 */
    public function time(){
        $date=Input::get('date');
        $id=Input::get('id');
        $t=Input::get('time');
        $duration=vendor_model::where('id','LIKE',$id)->value('duration');
        $duration_value=$duration;
        $duration=$duration*60+$this->window;
        $m=$duration%60;
        $h=$duration/60;
        $h=explode(".",$h);
        $count=booked_date::where('vendor_id','LIKE',$id)->where('date','LIKE',$date)->count();
        $ret='1';
        if($count>'0'){
            $val=booked_date::where('vendor_id','LIKE',$id)->where('date','LIKE',$date)->get();
            foreach($val as $time)
            {
                $time1=explode(":",$t);
                $time2=explode(":",$time->time);
                $min = $time1[1]-$time2[1];
                $hour_carry = 0;
                if($min < '0'){
                    $min += 60;
                    $hour_carry += 1;
                }
                $hour = $time1[0]-$time2[0]-$hour_carry;
                $count=$hour*60+$min;
                $count=abs($count);
                if($count<$duration)
                {
                    $ret='0';
                }
                if($ret=='0')
                {
                    $ap='AM';
                    $apt='AM';
                    $carry='0';
                    $j=$time2[1]+$this->window;
                    if($j>=60)
                    {
                        $j-=60;
                        $carry='1';
                    }
                    else if($j<'0'){
                        $j+=60;
                        $carry='-1';
                    }
                    $k=$time2[0]+$duration_value+$carry;
                    if($k>'24'){
                        $apt='AM';
                        $apt='AM';
                        $k-=24;
                    }
                    else if($k>'12'){
                        $apt='PM';
                        $k-=12;
                    }
                    $time3=explode(":",$time->time);
                    if($time3['0']>'12'){
                        $ap='PM';
                        $time3['0']-=12;
                    }
                    $before_ap=$ap;
                    $after_carry='0';
                    $before_min=$time3[1]-$this->window+1;
                    if($before_min<'0'){
                        $before_min+=60;
                        $after_carry='1';
                    }
                    $before_hour=$time3[0]-$duration_value-$after_carry;
                    if($before_hour<'0') {
                        $before_hour += 12;
                        if ($before_ap == 'PM') {
                            $before_ap = 'AM';
                        }
                        else{
                            $before_ap='PM';
                        }
                    }
                    $after_j=$j-1;
                    $after_k=$k;
                    if($after_j<'0'){
                        $after_j+=60;
                        $after_k-=1;
                    }
                    if($j==''){
                        $j='00';
                    }
                    return Response::json('Slot from '.$time3['0'].':'.$time3['1']. ' '.$ap. ' to '.$k.':'.$j.' '.$apt.' is booked.
                    Please check the slot before '.$before_hour.':'.$before_min. ' '.$before_ap. ' or after '.$after_k.':'.$after_j.' '.$apt);
                }
            }
            return Response::json('Available');
        }
        return Response::json('Available');
    }

    protected function sms($mobile,$message){
        $ch = curl_init();
        $user="rahulbhayana10@gmail.com:rahulbhayana";
        $receipientno=$mobile;
        $senderID="TEST SMS";
        $msgtxt=$message;
        curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
        curl_exec($ch);
        curl_close($ch);
    }
}

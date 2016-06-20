<?php

namespace App\Http\Controllers;

use App\bill;
use  App\booking_event;
use App\combo;
use App\promo;
use App\sel_combo;
use App\subscribe;
use App\vendor_model;
use Illuminate\Http\Request;
use App\booked_date;
use App\Http\Requests;
use App\venue_type;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Softon\Indipay\Facades\Indipay;
use Illuminate\Support\Facades\Input;
class bash extends Controller
{
    protected $tdr_percent='3';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locality=vendor_model::orderBy('locality','ASC')->groupBy('locality')->where('show','LIKE','Yes')->get();
        return view('bash.index',compact('locality'))->with('title','BashIndia|Book Party Online');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=1;
        do{
            $client_id=rand(100000000,9999999999);
            $count=booking_event::where('client_id','LIKE',$client_id)->count();
        }while($count>'0');
        $venue=vendor_model::where('id','LIKE',$id)->first();
        date_default_timezone_set('Asia/Kolkata');
        $booking_date=$request->booking_date;
        $booking_date_time=date('jS M Y h:i:s A',strtotime($booking_date));
        $booking_date=date('Y-m-d h:i:s A',strtotime($booking_date));
        $booked_date=$request->booked_date;
        $booked_time=$request->booked_time;
        $combo=$request->combo;
        do{
            $random=rand(100000000000,9999999999999);
            $count=booking_event::where('client_id','LIKE',$random)->count();
        }while($count=='1');
        $unique=$request->u;
        $total_person=$request->person;
        $customer_name=$request->name;
        $customer_email='rahulbhayana10@gmail.com';
        $total_cost=$request->total_cost;
        $final_cost=$request->final_cost;
        $advance_payment=$request->advance_payment;
        $buffet=$request->combo;
        $combo_num=combo::where('vendor_id','LIKE',$id)->where('combo','LIKE',$buffet)->first();
        $vs=$request->veg_starter;
        $nvs=$request->non_veg_starter;
        $vmc=$request->veg_main_course;
        $nvmc=$request->non_veg_main_course;
        $bread=$request->bread;
        $salad=$request->salad;
        $dessert=$request->dessert;
        $rice=$request->rice;
        $sd=$request->soft_drinks;
        $hd=$request->hard_drinks;
        $promo_code=$request->promo_code;
        $promo_discount='0';
        $nvss='hello';
        if($total_cost>$final_cost) {
            $promo_discount = promo::where('code', 'LIKE', $promo_code)->value('amount');
            $promo_applied = promo::where('code', 'LIKE', $promo_code)->value('applied');
            $p = $promo_applied + 1;
            promo::where('code', 'LIKE', $promo_code)->update(['applied' => $p]);
        }
        $tdr=$this->tdr_percent;
        if($promo_code==''){
            $promo_discount='0';
        }
        $customer_email='rahulbhayana10@gmail.com';
        Mail::send('emails.booked_email1',array('final_cost'=>'123','sd'=>'123,345',
            'hd'=>'123','dessert'=>'456','salad'=>'567','rice'=>'asd','bread'=>'bread','nvmc'=>'nvmc','vmc'=>'vmc',
            'nvs'=>'nv','vs'=>'vs','buffet'=>'buffet','nvss'=>'vss','random'=>'rando','venue'=>'venue','booking_date_time'=>'booking_date_time',
            'booked_date'=>'booking_date','booked_time'=>'booked_time', 'total_person'=>'total_person','customer_name'=>'customer_name',
            'advance_payment'=>'advance_paymen'), function ($m) use ($customer_email){
            $m->from('rahul@bashindia.com', 'Team BashIndia');

            $m->to($customer_email)->subject('Bash India New registration');
        });
        if( count(Mail::failures()) > 0 ) {

        echo "There was one or more failures. They were: <br />";

    } else {
        echo "No errors, all sent successfully!";
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    /*
     * url generator
     */
    public function urlCreate(Request $request){
        $venue=$request->type;
        $location=$request->location;

        return redirect('view/'.$venue.'s-in-'.$location);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d=explode("-",$id);
        $venues=$d[0];
        $venue=str_singular($venues);
        $location='%'.$d[2].'%';
        $cap=Input::get('c');
        $t=vendor_model::value('locality');
        $get=vendor_model::getfiltervenue()->join('venue_types', function ($join) use ($venue) {
            $join->on('vendor.id', '=', 'venue_types.vendor_id')
                ->where('venue_types.types', 'LIKE', $venue);
        })->where('locality','LIKE',$location)->orderBy('rupee','ASC')->where('show','Like','Yes')->get();
        $count=vendor_model::getfiltervenue()->join('venue_types', function ($join) use ($venue) {
        $join->on('vendor.id', '=', 'venue_types.vendor_id')
            ->where('venue_types.types', 'LIKE', $venue);
              })->where('locality','LIKE',$location)->where('show','Like','Yes')->count();
        if($cap=='ASC'){
            $get=vendor_model::getfiltervenue()->join('venue_types', function ($join) use ($venue) {
                $join->on('vendor.id', '=', 'venue_types.vendor_id')
                    ->where('venue_types.types', 'LIKE', $venue);
            })->where('locality','LIKE','%'.$location.'%')->orderBy('capacity','ASC')->where('show','Like','Yes')->get();
        }
        return view('show.index',compact('get','count','venue','location'))->with('title',$venues.' in ' .$location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function termsCondition()
    {
        return view('bash.terms-and-condition')->with('title','Terms and Condition');
        }
        /*
         * show privacy and policy of bashindia
         */
        public function privacyPolicy()
    {
        return view('bash.privacy-policy')->with('title','Privacy Policy');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /*
     * booking page
     */
    public function bookingDetails($pub,$city,$venue_name,$venue){
        $details=vendor_model::where('venue_type',$pub)->where('slug','LIKE',$venue_name)->where('city',$city)->where('unique','LIKE',$venue)->first();
        $count=vendor_model::where('venue_type',$pub)->where('slug','LIKE',$venue_name)->where('city',$city)->where('unique','LIKE',$venue)->count();
        $max=booking_event::max('id');
        return view('book.booking-page',compact('details','count','max'))->with('title','Book Now');
    }
    /*
     * after booking complet information
     */
    public function bookNow(Request $request){
        $id=$request->vendor_id;
        do{
            $client_id=rand(100000000,9999999999);
            $count=booking_event::where('client_id','LIKE',$client_id)->count();
        }while($count>'0');
        $venue=vendor_model::where('id','LIKE',$id)->first();
        date_default_timezone_set('Asia/Kolkata');
        $booking_date=$request->booking_date;
        $booking_date_time=date('jS M Y h:i:s A',strtotime($booking_date));
        $booking_date=date('Y-m-d h:i:s A',strtotime($booking_date));
        $booked_date=$request->booked_date;
        $booked_time=$request->booked_time;
        $combo=$request->combo;
        do{
            $random=rand(100000000000,9999999999999);
            $count=booking_event::where('client_id','LIKE',$random)->count();
        }while($count=='1');
        $unique=$request->u;
        $total_person=$request->person;
        $customer_name=$request->name;
        $bashindia_promo=$request->bash;
        $customer_email=$request->email;
        $customer_phone=$request->phone;
        $budget_person=$request->budget_person;
        $total_cost=$request->total_cost;
        $final_cost=$request->final_cost;
        $advance_payment=$request->advance_payment;
        $buffet=$request->combo;
        $combo_num=combo::where('vendor_id','LIKE',$id)->where('combo','LIKE',$buffet)->first();
        $vs=$request->veg_starter;
        $nvs=$request->non_veg_starter;
        $vmc=$request->veg_main_course;
        $nvmc=$request->non_veg_main_course;
        $bread=$request->bread;
        $salad=$request->salad;
        $dessert=$request->dessert;
        $rice=$request->rice;
        $sd=$request->soft_drinks;
        $hd=$request->hard_drinks;
        $promo_code=$request->promo_code;
        $promo_discount='0';

        if($total_cost>$final_cost) {
            $promo_discount = promo::where('code', 'LIKE', $promo_code)->value('amount');
            $promo_applied = promo::where('code', 'LIKE', $promo_code)->value('applied');
            $p = $promo_applied + 1;
            promo::where('code', 'LIKE', $promo_code)->update(['applied' => $p]);
        }
        $tdr=$this->tdr_percent;
        if($promo_code==''){
            $promo_discount='0';
        }
        flash()->error('Waiting to upgrade the merchant on the website');
        return back();
        booking_event::insert([
            'id'=>$unique,
            'client_id'=>$client_id,
            'event_name'=>'',
            'website_booking'=>$booking_date,
            'client_name'=>$customer_name,
            'mobile'=>$customer_phone,
            'email'=>$customer_email,
            'vendor_id'=>$id,
            'party_booking_date'=>$booked_date,
            'time'=>$booked_time,
            'total_person'=>$total_person,
            'total_bill'=>$total_cost,
            'final_bill'=>$final_cost,
            'paid'=>$advance_payment,
            'combo'=>$combo,
            'order'=>'No',
            'invalid'=>'No',
            'manager_respond'=>'No',
            'payment_tdr'=>'Null',
            'payment_name'=>'Null',
            'coupon_name'=>$promo_code,
            'coupon_discount'=>$promo_discount,
            'invalid'=>'No',
            'completed_successfully'=>'No'
        ]);
        booked_date::insert([
            'vendor_id'=>$id,
            'date'=>$booked_date,
            'time'=>$booked_time,
        ]);
        $c=subscribe::where('email','LIKE',$customer_email)->count();
        if($c=='0') {
            subscribe::insert([
                'email' => $customer_email
            ]);
        }
        $vss='';
        $nvss='';
        $vmcs='';
        $nvmcs='';
        $breads='';
        $rices='';
        $salads='';
        $desserts='';
        $sds='';
        $hds='';
        if($vs!='') {
            $vss = implode(';', $vs);
        }
        if($nvs!='') {
            $nvss = implode(';', $nvs);
        }
        if($hd!='') {
            $hds=implode(';',$hd);
        }
        if($sd!='') {
            $sds=implode(';',$sd);
        }
        if($nvmc!='') {
            $nvmcs=implode(';',$nvmc);
        }
        if($vmc!='') {
            $vmcs=implode(';',$vmc);
        }
        if($nvs!='') {
            $nvss = implode(';', $nvs);
        }
        if($dessert!='') {
            $desserts=implode(';',$dessert);
        }
        if($bread!='') {
            $breads=implode(';',$bread);
        }
        if($rice!='') {
            $rices=implode(';',$rice);
        }
        if($salad!='') {
            $salads=implode(';',$salad);
        }
        sel_combo::insert([
            'client_id'=>$unique,
            'veg_starter'=>$vss,
            'non_veg_starter'=>$nvss,
            'veg_main_course'=>$vmcs,
            'non_veg_main_course'=>$nvmcs,
            'bread'=>$breads,
            'rice'=>$rices,
            'salad'=>$salads,
            'dessert'=>$desserts,
            'soft_drinks'=>$sds,
            'hard_drinks'=>$hds,
        ]);
        $bash=$this->bill($id,$unique,$total_cost,$final_cost,$advance_payment,$promo_discount,$tdr,$bashindia_promo);
        $vendor_email=vendor_model::where('id','LIKE',$id)->value('email');
        Mail::queue('emails.booked_email',array('final_cost'=>$final_cost,'sd'=>$sd,
            'hd'=>$hd,'dessert'=>$dessert,'salad'=>$salad,'rice'=>$rice,'bread'=>$bread,'nvmc'=>$nvmc,'vmc'=>$vmc,
            'nvs'=>$nvs,'vs'=>$vs,'buffet'=>$buffet,'nvss'=>$nvss,'random'=>$random,'venue'=>$venue,'booking_date_time'=>$booking_date_time,
            'booked_date'=>$booking_date,'booked_time'=>$booked_time, 'total_person'=>$total_person,'customer_name'=>$customer_name,
            'advance_payment'=>$advance_payment), function ($m) use ($customer_email){
            $m->from('mail@bashindia.com', 'Team BashIndia');

            $m->to($customer_email)->subject('Bash India New registration');
        });
        Mail::queue('emails.vendor_email',array('final_cost'=>$final_cost,'bash'=>$bash,'sd'=>$sd,
            'hd'=>$hd,'dessert'=>$dessert,'salad'=>$salad,'rice'=>$rice,'bread'=>$bread,'nvmc'=>$nvmc,'vmc'=>$vmc,'nvs'=>$nvs,
            'vs'=>$vs,'buffet'=>$buffet,'nvss'=>$nvss,'random'=>$random,'venue'=>$venue,'booking_date_time'=>$booking_date_time,
            'booked_date'=>$booking_date,'booked_time'=>$booked_time, 'total_person'=>$total_person,'customer_name'=>$customer_name,
            'customer_email'=>$customer_email,'customer_phone'=>$customer_phone,'advance_payment'=>$advance_payment,
            'total_cost'=>$total_cost), function ($m) use ($vendor_email){
            $m->from('mail@bashindia.com', 'Team BashIndia');
            $m->to($vendor_email)->subject('Bash India New registration');
        });
        $message="New booking, ticket: ".$random;
        $this->bashsms("8800355421",$message);
        $this->bashsms($venue->mobile,$message);
        $message="Thanks for booking. Your ticket is ".$random;
        $this->bashsms($customer_phone,$message);
        flash()->success('Congratulation your ticket is booked.Email is sent to <b>'.$customer_email.'</b>.Pease check your email');
            return view('book.your-ticket-is-booked',compact('bash','unique','client_id','final_cost','sd','hd','dessert','salad','rice','bread',
                'nvmc','vmc','combo_num','nvs','vs','buffet','nvss','random','venue','booking_date_time',
                'booked_date','booked_time','combo', 'total_person','customer_name',
                'customer_email','customer_phone','budget_person','advance_payment','total_cost'))
                ->with('title','Ticket booked');
    }
    /*
     * calculate completecalculation of booking events
     */
    protected function bill($id,$booking_id,$total_cost,$final_cost,$advance_payment,$promo_percent,$tdr_percent,$bashindia_promo){
        $vp=vendor_model::where('id','LIKE',$id)->value('pp');
        $cp=vendor_model::where('id','LIKE',$id)->value('cancellation_percent');
        $account=vendor_model::where('id','LIKE',$id)->value('account');
        $tc=$total_cost;
        $fc=$final_cost;
        $ap=$advance_payment;
        $pp=$promo_percent;

        $tp=$tdr_percent;
        $tdr_amount=($fc*$tp)/200;
        if($bashindia_promo=='bashindia'){
            $vendor_amount=($tc*$vp)/100;
            $promo_amount=$tc-$fc;
        }
        else{
            $vendor_amount=($fc*$vp)/100;
            $promo_amount='0';
        }
        $our_profit=$vendor_amount-$tdr_amount-$promo_amount;
        $money_to_manager=$ap-$vendor_amount;
        bill::insert([
            'booking_id'=>$booking_id,
            'total_cost'=>$tc,
            'final_cost'=>$fc,
            'advance_payment'=>$ap,
            'coupon_percent'=>$pp,
            'coupon_amount'=>$promo_amount,
            'tdr_amount'=>$tdr_amount,
            'tdr_percent'=>$tp,
            'vendor_percent'=>$vp,
            'vendor_amount'=>$vendor_amount,
            'our_profit'=>$our_profit,
            'manager_return'=>$money_to_manager,
            'account'=>$account,
            'cancellation_percent'=>$cp
        ]);
        return $money_to_manager;
    }

    /*
     * gps map tracker
     */
    public function map(){
        return view('bash.maps');
    }
    /*
     * show individual venue details
     *
     */
    public function viewVenue($pub,$city,$venue_name,$venue){
        $details=vendor_model::where('venue_type',$pub)->where('slug','LIKE',$venue_name)->where('city',$city)->where('unique','LIKE',$venue)->first();
        $count=vendor_model::where('venue_type',$pub)->where('slug','LIKE',$venue_name)->where('city',$city)->where('unique','LIKE',$venue)->count();
        if($count=='0'){
            $venue_name='Page Not Found';
        }
        $max=booking_event::max('id');
        return view('venue.view-venue',compact('details','count','max'))->with('title',$venue_name);
    }
    /*
     * frequently asked question
     */
    public function faq(){
        return view('bash.faq')->with('title','Frequently Asked Question');
    }
    /*
     * still not comleted this option
     */
    public function response(Request $request)

    {

        $response = Indipay::response($request);

        dd($response);
    }

    /*
     * oreder cancellation pge show
     *
     */
    public function cancelOrder(){
        return view('bash.cancelOrder')->with('title','Order Cancellation');
    }
    /*
     * create careers page
     */
    public function careers(){
        return view('bash.careers')->with('title','Careers');
    }
    /*
     * send sms dynamically
     */
    protected function bashsms($mobile,$message){
        $ch = curl_init();
        $user="rahulbhayana10@gmail.com:rahulbhayana";
        $receipientno=$mobile;
        $senderID="TEST SMS";
        $msgtxt=$message;
        curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
        $buffer = curl_exec($ch);
        if(empty ($buffer))
        { echo " buffer is empty "; }
        else
        { echo $buffer; }
        curl_close($ch);
        return 'hello';
    }
}

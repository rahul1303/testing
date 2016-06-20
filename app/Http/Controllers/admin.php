<?php

namespace App\Http\Controllers;

use App\bill;
use App\booking_event;
use  App\combo;
use App\feedback;
use App\forum;
use App\promo;
use App\term;
use App\time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\vendor_model;
use App\image;
use Validator;
use App\Http\Requests\VenueAddRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\TermsRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;
use App\venue_type;
class admin extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.index')->with('title','Welcome Admin');
    }
 /*
 create random keyword
 */
    function RandomString()
    {
        do{
           $randstring=rand(1000000000,9999999999);
            $value=vendor_model::where('unique',$randstring)->count();
        }while($value=='1');
    return $randstring;
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $random=$this->RandomString();
        $count=vendor_model::max('id');
        return view('admin.add-venue',compact('count','random'))->with('title','Add venue');
    }
    public function comboTime()
{
    $vendor_id=vendor_model::orderBy('id','DESC')->get();
    return view('admin.add-combo-time',compact('vendor_id'))->with('title','Add combo and time');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VenueAddRequest $request)
    {
        $unique=$request->unique;
        $manager_name=$request->manager_name;
        $mobile=$request->mobile;
        $tel=$request->tel;
        $address_1=$request->address_1;
        $address_2=$request->address_2;
        $locality=$request->locality;
        $city=$request->city;
        $type=$request->type;
        $capacity=$request->capacity;
        $dj=$request->dj;
        $dj_charge=$request->dj_charge;
        $bachelor=$request->bachelor;
        $parking=$request->parking;
        $pp=$request->pp;
        $email=$request->email;
        $password=bcrypt($request->password);
        $venue_name=$request->venue_name;
        $metro=$request->metro_1;
        $person=$request->person;
        $rupee=$request->rupee;
        $account=$request->account;
        $metro_lat=$request->metro_lat;
        $metro_lon=$request->metro_lon;
        $venue_lat=$request->venue_lat;
        $venue_lon=$request->venue_lon;
        $distance=$request->metro_dis;
        $discription=$request->description;
        $show=$request->show;
        $time_to_prepare=$request->time_to_prepare;
        $duration=$request->duration;
        $cancellation_percent=$request->c_percent;
        $fixed_buffet=$request->fixed_buffet;
        $slug=str_slug($venue_name,'-');
        if($dj=='Yes')
        {
            $dj_charge='0';
        }
        Mail::queue('emails.vendor_registration',array('name'=>$manager_name,'password'=>$request->password,
            'email'=>$email), function ($m) use ($email){
            $m->from('mail@bashindia.com', 'Team BashIndia');

            $m->to($email)->subject('Bash India New registration');
        });
        vendor_model::insert([
            'unique'=>$unique,
            'venue_name'=>$venue_name,
            'manager_name'=>$manager_name,
            'mobile'=>$mobile,
            'tel'=>$tel,
            'address_1'=>$address_1,
            'address_2'=>$address_2,
            'locality'=>$locality,
            'city'=>$city,
            'capacity'=>$capacity,
            'dj'=>$dj,
            'duration'=>$duration,
            'dj_charge'=>$dj_charge,
            'parking'=>$parking,
            'person'=>$person,
            'metro'=>$metro,
            'metro_lon'=>$metro_lon,
            'metro_lat'=>$metro_lat,
            'metro_dis'=>$distance,
            'venue_lat'=>$venue_lat,
            'venue_lon'=>$venue_lon,
            'bachelor'=>$bachelor,
            'pp'=>$pp,
            'show'=>$show,
            'discription'=>$discription,
            'slug'=>$slug,
            'rupee'=>$rupee,
            'account'=>$account,
            'email'=>$email,
            'password'=>$password,
            'cancellation_percent'=>$cancellation_percent,
            'time_to_prepare'=>$time_to_prepare,
            'fixed_buffet'=>$fixed_buffet
        ]);
        $id=vendor_model::max('id');
        $files = $request->file('images');
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        foreach($files as $file) {
            $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){
                $extension = $file->getClientOriginalExtension();
                Storage::disk('image')->put($file->getClientOriginalName(), File::get($file));
                $image = 'vendor_image/' . $file->getClientOriginalName() ;
                image::insert([
                    'vendor_id'=>$id,
                    'path'=>$image
                ]);
                $uploadcount ++;
            }
        }

        if(is_array($type))		//store the value of liveon field in an array.
        {
            while (list($key, $val) = each($type)) {
                venue_type::insert([
                    'vendor_id'=>$id,
                    'types'=>$val
                ]);
            }
        }
        if($uploadcount == $file_count){
            flash()->success('Upload successfully');
            return redirect('admin/add-venue');
        }
        else {
            flash()->danger('Image is not uploaded by information uploaded successfully');
            return redirect('admin/add-venue')->withInput()->withErrors($validator);
        }
    }
    public function storeCombo(Request $request)
    {
        $id=$request->vendor_id;
        $combo=$request->combo;
        $budget=$request->budget;
        $type=$request->type;
        $vsa=$request->veg_starter_avail;
        $vs=$request->veg_starter;
        $vsn=$request->veg_starter_num;
        $nvsa=$request->non_veg_starter_avail;
        $nvs=$request->non_veg_starter;
        $nvsn=$request->non_veg_starter_num;
        $vmca=$request->veg_main_course_avail;
        $vmc=$request->veg_main_course;
        $vmcn=$request->veg_main_course_num;
        $nvmca=$request->non_veg_main_course_avail;
        $nvmc=$request->non_veg_main_course;
        $nvmcn=$request->non_veg_main_course_num;
        $ba=$request->bread_avail;
        $b=$request->bread;
        $bn=$request->bread_num;
        $ra=$request->rice_avail;
        $r=$request->rice;
        $rn=$request->rice_num;
        $sa=$request->salad_avail;
        $s=$request->salad;
        $sn=$request->salad_num;
        $da=$request->desert_avail;
        $d=$request->desert;
        $dn=$request->desert_num;
        $sda=$request->soft_drinks_avail;
        $sd=$request->soft_drinks;
        $sdn=$request->soft_drinks_num;
        $hda=$request->hard_drinks_avail;
        $hd=$request->hard_drinks;
        $hdn=$request->hard_drinks_num;
        combo::insert([
           'vendor_id'=>$id,
           'combo'=>$combo,
           'budget'=>$budget,
           'type'=>$type,
           'veg_starter_avail'=>$vsa,
            'veg_starter'=>$vs,
            'veg_starter_num'=>$vsn,
            'non_veg_starter_avail'=>$nvsa,
            'non_veg_starter'=>$nvs,
            'non_veg_starter_num'=>$nvsn,
            'veg_main_course_avail'=>$vmca,
            'veg_main_course'=>$vmc,
            'veg_main_course_num'=>$vmcn,
            'non_veg_main_course_avail'=>$nvmca,
            'non_veg_main_course'=>$nvmc,
            'non_veg_main_course_num'=>$nvmcn,
            'bread_avail'=>$ba,
            'bread'=>$b,
            'bread_num'=>$bn,
            'salad_avail'=>$sa,
            'salad'=>$s,
            'salad_num'=>$sn,
            'rice_avail'=>$ra,
            'rice'=>$r,
            'rice_num'=>$rn,
            'dessert_avail'=>$da,
            'dessert'=>$d,
            'dessert_num'=>$dn,
            'soft_drinks_avail'=>$sda,
            'soft_drinks'=>$sd,
            'soft_drinks_num'=>$sdn,
            'hard_drinks_avail'=>$hda,
            'hard_drinks'=>$hd,
            'hard_drinks_num'=>$hdn
        ]);

        flash()->success('New combo is added');
        return redirect('admin/add-combo-and-time');
    }
    public function storeTime(Request $request)
    {
        $id=$request->vendor_id;
        $start=$request->start_time;
        $end=$request->end_time;
        time::insert([
            'vendor_id'=>$id,
            'start_time'=>$start,
            'end_time'=>$end
        ]);
        flash()->success('New time is added');
        return redirect('admin/add-combo-and-time');
    }

    /**
     * show all unfiltered forum on admin forum page
     */
    public function forum()
    {
        $forum=forum::where('show','LIKE','')->orderBy('created_at','DSC')->get();
        return view('admin.forum',compact('forum'))->with('title','Forums');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function feedback()
    {
        $feedback=feedback::orderBy('id','DESC')->get();
        return view('admin.feedback',compact('feedback'))->with('title','feedback');
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

    public function view()
    {
        $min = Input::has('min_budget') ? Input::get('min_budget') : '0';
        $max = Input::has('max_budget') ? Input::get('max_budget') : '70000';
        $type = Input::has('type') ? Input::get('type') : '%';
        $items=vendor_model::geturl() ->leftjoin('combo','vendor.id', '=', 'combo.vendor_id')
            ->where('combo.type', 'LIKE', $type.'%')->whereBetween('combo.budget',[$min,$max])->groupBy('vendor_id')->paginate(9);
        $cities=vendor_model::groupBy('city')->get();
        $events=vendor_model::groupBy('venue_type')->get();
        return view('admin.view',compact('items','cities','events'))->with('title','Vew Venue');
    }
    /*
     * show the form of hide unhide venue form page
     */

    public function hideUnhideView()
    {
        $venue_unhidden=vendor_model::where('show','Yes')->get();
        $venue_hidden=vendor_model::where('show','No')->get();
        return view('admin.hide-unhide-venue',compact('venue_hidden','venue_unhidden'))->with('title','Hide Unhide Venue');
    }
    /*
     * hide venue function
     */
    public function hide(Request $request){
        $hide=Input::has('hide')?Input::get('hide'):null;
        if(is_array($hide))		//store the value of liveon field in an array.
        {
            while (list($key, $val) = each($hide)) {
                vendor_model::where('id', $val)->update(['show' => 'No']);
            }
            flash()->success('Venue successfully hidden');
        }else
        {
            flash()->warning('Nothing to hide');
        }
        return redirect('admin/hide-unhide-venue');
    }
    /*
     * unhide the venue function
     */
    public function unhide(Request $request){

        $hide=Input::has('unhide')?Input::get('unhide'):null;
        if(is_array($hide))		//store the value of liveon field in an array.
        {
            while (list($key, $val) = each($hide)) {
                vendor_model::where('id', $val)->update(['show' => 'Yes']);
            }
            flash()->success('Venue successfully unhidden');
        }else
        {
            flash()->warning('Nothing to unhide');
        }
        return redirect('admin/hide-unhide-venue');
    }
    /*
     * edit multiple form on view venuw page
    */
    public function editMultiple(Request $request){

     $value='';
        $attribute=$request->edit_item_attribute;
        if($attribute=='')
        {
            flash()->overlay('No attribute is selected','Warning');
        }
        if($attribute=='pp' || $attribute=='min_order')
        {
            $value=$request->text;

        }
        else if($attribute=='bachelor' || $attribute=='show')
        {
            $value=$request->yn;
        }
        else if($attribute=='event_type')
        {
            $value=$request->event_type;
        }
        else
        {
        }
        $checkbox=$request->checkbox;
        flash()->overlay(' You forget to tick the checkbox','Oooppssss!');
        if($value=='')
        {
             flash()->overlay('You forgot to enter value','Warning');
        }
        if(is_array($checkbox))
        {
            while(list($key,$val)=each($checkbox))
            {
                    vendor_model::where('id',$val)->update([$attribute => $value]); 		//upadate the table
            }
            flash()->overlay($attribute.' Field Updated','Success');
        }
        $url=$request->path;
        return redirect('admin/view-venue?page='.$url);
    }
    /*
     * booking details of clients
     */
    public function bookingDetails(){
        $book=booking_event::bookingfilter()->orderBy('id','desc')->paginate(10);
        return view('admin.booking-details',compact('book'))->with('title','Booking Details');
    }

    public function comboView($id)
    {
        $val=vendor_model::find($id)->combos;
        return view('admin.mouseovercombo',compact('val'));
    }
    /*
     * store venue terms and condition
     */
    public function storeTerms(Request $request){
        $id=$request->vendor_id;
        $terms=$request->terms;
        term::insert([
            'vendor_id'=>$id,
            'term'=>$terms
        ]);
        flash()->success('New term is added to the database');
        return redirect('admin/add-combo-and-time');
    }
    /*
     *
     * show billing and invoice
     */
    public function invoice(){
        $bill=bill::orderBy('booking_id','DESC')->where('cancellation','LIKE','')->paginate(10);
        return view('admin.invoice',compact('bill'))->with('title','Invoice and Bills');
    }
    public function cancelledOrder(){
    $bill=bill::orderBy('booking_id','DESC')->where('cancellation','LIKE','Yes')->paginate(10);
    return view('admin.cancelled',compact('bill'))->with('title','Cancelled Order Details');
}


    /*
     * show coupon page
     */
    public function coupon(){
        $promo=promo::orderBy('valid','DESC')->get();
        return view('admin.add-coupon',compact('promo'))->with('title','Add Coupon');
    }
    /*
     * insert new coupon function
     */
    public function postCoupon(){
        $date=Input::get('date');
        $name=Input::get('name');
        $percent=Input::get('percent');
        $allowed=Input::get('allowed');
        $vendor_id=Input::get('id');
        $buffet=Input::get('buffet');
        $count=promo::where('code','LIKE',$name)->count();
        if($count>'0')
        {
            return Response::json('This code already exit');
        }
        promo::insert([
           'code'=>$name,
           'valid'=>$date,
           'allowed'=>$allowed,
           'amount'=>$percent,
           'vendor_id'=>$vendor_id,
           'buffet'=>$buffet,
        ]);
        return Response::json('New code inserted');
    }
}

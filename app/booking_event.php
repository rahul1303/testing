<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
class booking_event extends Model
{
    protected $table='booking_event';

    public function scopeBookingfilter($query){
        $query->where(function ($query) {

            $date = Input::has('after_date') ? Input::get('after_date') : '%';
            $web = Input::has('website_booking_date') ? Input::get('website_booking_date') : '%';
            $party = Input::has('party_booking_date') ? Input::get('party_booking_date') : '%';
            $money = Input::has('mooney_to_manager') ? Input::get('money_to_manager') : '%';
            $query->where('website_booking','LIKE',$web)->where('party_booking_date','LIKE',$party)->where('party_booking_date','>=',$date);
        });
    }
}

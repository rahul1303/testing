<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
class vendor_model extends Model
{
    protected $table = 'vendor';

    public function combos()
    {
        return $this->hasMany('App\combo', 'vendor_id');
    }
    public function maxcombos()
    {
        return $this->hasOne('App\combo', 'vendor_id')->orderBy('budget','Desc');
    }

    public function timings()
    {
        return $this->hasMany('App\time', 'vendor_id');
    }

    public function forums()
    {
        return $this->hasMany('App\forum','vendor_id')->orderBy('created_at','Desc');
    }

    public function stars()
    {
        return $this->hasMany('App\star','vendor_id');
    }

    public function images()
    {
        return $this->hasMany('App\image', 'vendor_id');
    }

    public function booked()
    {
        return $this->hasMany('App\booked_date','vendor_id');
    }
    public function terms()
    {
        return $this->hasMany('App\term','vendor_id');
    }


    public function scopeGeturl($query)
    {
        $query->where(function ($query) {
            $min_budget = strtoupper(Input::has('min_budget') ? Input::get('min_budget') : '%');
            $max = Input::has('max_budget') ? Input::get('max_budget') : '%';
            $city = Input::has('city') ? Input::get('city') : '%';
            $event_type = Input::has('city') ? Input::get('event_type') : '%';
            $show = Input::has('show') ? Input::get('show') : '%';
            $capacity = Input::has('capacity') ? Input::get('capacity') : '%';
            $key = Input::has('key') ? Input::get('key') : '%';
            $query->where('show', 'like', $show . '%')->where('id','LIKE',$key)->where('capacity', '>=', $capacity)
                ->where('city','LIKE',$city)->where('venue_type','LIKE',$event_type);
        });

    }
    public function scopeGetfiltervenue($query){
        $query->where(function ($query) {
            $budget = Input::has('budget') ? Input::get('budget') : '%';
            $capacity = Input::has('capacity') ? Input::get('capacity') : '%';
            $guest = Input::has('guest') ? Input::get('guest') : '%';
            if($budget=='5000'){
                $budget='5000';
                $a='5000';
                $b='100000';
            }
            else if($budget=='%'){
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
            else if($capacity=='%'){
                $c='0';
                $d='10000';
            }
            else
            {
                $capacity=explode("-",$capacity);
                $c=$capacity[0];
                $d=$capacity[1];
            }
            if($guest=='50'){
                $guest='50';
                $g='50';
                $t='1000';
            }
            else if($guest=='%'){
                $g='0';
                $t='1000';
            }
            else
            {
                $guest=explode("-",$guest);
                $g=$guest[0];
                $t=$guest[1];
            }
            $query->whereBetween('rupee', [$a,$b])->whereBetween('capacity', [$c,$d])->whereBetween('person', [$g,$t]);
        });
    }
}

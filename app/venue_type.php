<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venue_type extends Model
{
    public function vendor_models()
    {
        return $this->belongsTo('App\vendor_model','vendor_id');
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VenueAddRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return [
            'manager_name'=>'required',
            'mobile'=>'required|numeric',
            'tel'=>'required|numeric',
            'address_1'=>'required',
            'locality'=>'required',
            'pp'=>'required',
            'min_order'=>'required',
            'discount'=>'required',
            'venue_name'=>'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}

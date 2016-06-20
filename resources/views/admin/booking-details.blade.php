@extends('admin')

@section('content')
    <div class="row product-hide">
        @include('admin.booking-filter-form')
        <div class="product-table inner" style="margin-left:20px;margin-top:85px;" >
            <table class='product-table-data lazy' id='ajax-filter'>
                <thead><tr>
                    <th>Select</th>
                    <th>id</th>
                    <th>client_id</th>
                    <th>Cancellation</th>
                    <th>Manager responds</th>
                    <th>Party_Date</th>
                    <th>Timing</th>
                    <th>Total person</th>
                    <th>Total bill</th>
                    <th>Final bill</th>
                    <th>Bill paid in advance</th>
                    <th>% in advance</th>
                    <th>Coupon Name</th>
                    <th>Payment gateway</th>
                    <th>Vendor_id</th>
                    <th>Combo selected</th>
                    <th>Date of Booking party</th>
                    <th>Customer Name</th>
                    <th>Mobile</th>
                    <th>email</th>
                </tr></thead>
                @foreach($book as $val)
                    <tbody>
                    <tr id="{{ $val->id }}" class="{{$val->cancellation}}">
                        <td><input type="checkbox" name="checkbox[]" value="{{ $val->id }}" id="checkbox"></td>
                        <td>{{$val->id}}</td>
                        <td>{{$val->client_id}}</td>
                        <td>{{$val->cancellation}}</td>
                        <td>{{$val->manager_respond}}</td>
                        <td>{{$val->party_booking_date}}</td>
                        <td>{{$val->time}}</td>
                        <td>{{$val->total_person}}</td>
                        <td>{{$val->total_bill}}</td>
                        <td>{{$val->final_bill}}</td>
                        <td>{{$val->paid}}</td>
                        <td>50</td>
                        <td>{{ $val->coupon_name }}</td>
                        <td>{{$val->payment_name}}</td>
                        <td><a href="{{ url('admin/view-venue?key='.$val->vendor_id) }}">{{$val->vendor_id}}</a></td>
                        <td>{{ $val->combo }}</td>
                        <td>{{$val->website_booking}}</td>
                        <td>{{$val->client_name}}</td>
                        <td>{{$val->mobile}}</td>
                        <td>{{$val->email}}</td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

    </div>
    <div class="container" style="position: fixed;bottom: 0px;left: 10px;">
        <?php
        $date = Input::has('after_date') ? Input::get('after_date') : null;
        $web = Input::has('website_booking_date') ? Input::get('website_booking_date') : null;
        $party = Input::has('party_booking_date') ? Input::get('party_booking_date') : null;
        $money = Input::has('mooney_to_manager') ? Input::get('money_to_manager') : null;
        echo str_replace('/?', '?', $book->appends(['after_date'=> $date,'website_booking_date'=>$web,'party_booking_date' =>$party
            ,'money_to_manager' =>$money])->render()) ?></div>
    </div>
@endsection
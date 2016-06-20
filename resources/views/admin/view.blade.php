@extends('admin')

@section('content')
    <style>
        .grey{
            background-color: lightgrey;
        }
    </style>
    <title>{{ $title }}</title>
    <div class="row product-hide">
        @include('admin.filter-form')
        <form method="post" action="{{ url('admin/edit-multiple-form') }}">
            @include('admin.edit-multiple-form')
            <div class="product-table inner" style="margin-left:20px;margin-top:85px;" >
                <table class='product-table-data lazy' id='ajax-filter'>
                    <thead><tr>
                        <th>Select</th>
                        <th>Primary</th>
                        <th>Type</th>
                        <th>Venue name</th>
                        <th>PP</th>
                        <th>Live</th>
                        <th>Combo/budget</th>
                        <th>Minimum person</th>
                        <th>Timing</th>
                        <th>Duration</th>
                        <th>Manager_name</th>
                        <th>Mobile</th>
                        <th>Tel</th>
                        <th>Address</th>
                        <th>Locality</th>
                        <th>City</th>
                        <th>Capacity</th>
                        <th>Parking</th>
                        <th>Dj</th>
                        <th>Dj charges</th>
                        <th>Metro</th>
                        <th>Distance</th>
                        <th>Bachelor</th>
                        <th>Discription</th>
                        <th>minimum per person</th>
                        <th>Edit</th>
                    </tr></thead>
                    @foreach($items as $show)
                        <tbody>
                        <tr id="{{ $show->id }}">
                            <td><input type="checkbox" name="checkbox[]" value="{{ $show->id }}" id="checkbox"></td>
                            <td>{{ $show->id }}</td>
                            <td>{{ $show->venue_type }}</td>
                            <td>{{ $show->venue_name }}</td>
                            <td>{{ $show->pp }}</td>
                            <td>{{ $show->show }}</td>
                            <td><a href="{{ url('admin/combo/'.$show->id) }}" target="_blank">Check Combo</a></td>
                            <td>{{ $show->person }}</td>
                            <td>@include('admin.mouseovertiming')</td>
                            <td>{{ $show->duration }}</td>
                            <td>{{ $show->manager_name }}</td>
                            <td>{{ $show->mobile }}</td>
                            <td>{{ $show->tel }}</td>
                            <td>{{ $show->address_1 }}<br>{{ $show->address_2 }}</td>
                            <td>@include('admin.mouseoverlocality')</td>
                            <td>{{ $show->city }}</td>
                            <td>{{ $show->capacity }}</td>
                            <td>{{ $show->parking }}</td>
                            <td>{{ $show->dj }}</td>
                            <td>{{ $show->dj_charge }}</td>
                            <td>@include('admin.mouseovermetro')</td>
                            <td>{{ $show->metro_dis }}</td>
                            <td>{{ $show->bachelor }}</td>
                            <td>@include('admin.mousehovercomment')</td>
                            <td>{{ $show->rupee }}</td>
                                <td >
                                    <!--<a href="{{url ('admin/edit-venue/'.$show->id )}}">Edit Product</a>
                                --></td>
                            </tr></tbody>
                    @endforeach
                </table>            </div>
        </form>

    </div>
    <div class="container" style="position: fixed;bottom: 0px;left: 10px;">
        <?php
        $min=Input::has('min_budget')?Input::get('min_budget'):null;
        $max=Input::has('max_budget')?Input::get('max_budget'):null;
        $show=Input::has('show')?Input::get('show'):null;
        $type=Input::has('type')?Input::get('type'):null;
        $capacity=Input::has('capacity')?Input::get('capacity'):null;
        $city=Input::has('city')?Input::get('city'):null;
        $event_type=Input::has('event_type')?Input::get('event_type'):null;
        echo str_replace('/?', '?', $items->appends(['min_budget'=> $min,'max_budget'=>$max,'show' =>$show
            ,'type' =>$type,'capacity' =>$capacity,'city' =>$city,'event_type' =>$event_type])->render()) ?></div>
    </div>

    @endsection
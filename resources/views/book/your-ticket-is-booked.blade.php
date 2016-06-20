@extends('master')

@section('content')
    @include('book.nav')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <div class="container" style="border: 1px solid lightgrey;margin-bottom: 10px;margin-top: 10px;">
        <div class="row" style="padding-top: 20px;padding-bottom: 20px; background-color: lightgrey">
            <div class="col-sm-offset-5 col-xs-offset-5 col-sm-2 col-xs-2">
                <h1><i><span style="color:grey">Bash</span><span style="color:red">!</span><span>ndia</span></i></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-offset-1 col-xs-11 col-sm-11 col-sm-offset-1">
                <h3 style="color:dodgerblue">Hey {{ $customer_name }}!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-xs-offset-1 col-xs-10 col-sm-10">
                Thank you for booking.<br>{{ $venue->manager_name }} will call you,in next 24 hour.If you have any query regarding anything related to
                {{ $venue->venue_name }},please feel free to ask them.
                Click on the link to <a href="{{ asset('maps?lat='.$venue->venue_lat.'&lon='.$venue->venue_lon ) }}" target="_blank">Get Location on Map</a>
                <br>Your order details are below. Thank you again for your order.
                <br><br>Your order is booked on {{ $booking_date_time }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-offset-1 col-xs-10 col-xs-offset-1 col-sm-10">
                <h3><b>Venue Details</b></h3>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-offset-2 col-sm-9 col-xs-offset-1">
                <div class="row" >
                    <div class="col-sm-3 col-xs-5">
                        <b>Venue Name :</b>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        {{ $venue->venue_name}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-5">
                                <b>Location :</b>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                {{ $venue->address_1}}, {{ $venue->address_2 }},
                                <br>{{ $venue->locality }}, {{ $venue->city }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-5">
                                <b>Manager Name:</b>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                {{ $venue->manager_name}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-5">
                                <b>Contact :</b>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                0{{ $venue->mobile}}
                                <br>{{ $venue->tel }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-5">
                                <b>Party duration:</b>
                            </div>
                            <div class="col-sm-3 col-xs-6" style="">
                                {{ $venue->duration}} hours
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-5">
                                <b>Nearest Metro Station:</b>
                            </div>
                            <div class="col-sm-3 col-xs-6" style="">
                                {{ $venue->metro}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1 col-xs-offset-1 col-xs-10">
                <h3><b>Booking Details</b></h3>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-offset-2 col-sm-9 col-xs-offset-1">
                <div class="row" >
                    <div class="col-sm-3 col-xs-6">
                        <b>Ticket Number :</b>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <b>{{ $random}}</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <b>Booking Date :</b>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                {{ $booked_date }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <b>Total person:</b>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                {{ $total_person}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <b>Total price :</b>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                Rs {{ $final_cost}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <b>Paid Advance:</b>
                            </div>
                            <div class="col-sm-3 col-xs-6" style="">
                                Rs {{ $advance_payment}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <b>Buffet selected:</b>
                            </div>
                            <div class="col-sm-3 col-xs-6" style="">
                                {{ $buffet}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <b>Selected Buffet:</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-12 col-xs-12">
                <div class="row">
                    @if($vs!='')
                        <div class="col-sm-2  col-sm-offset-1 col-xs-offset-1 col-xs-5">
                            Veg Starter
                            <ol>
                                @foreach($vs as $veg)
                                    <li>{{ $veg}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    @if($nvs!='')
                        <div class="col-sm-2  col-xs-5">
                            Non Veg Starter
                            <ol>
                                @foreach($nvs as $non_veg)
                                    <li>{{ $non_veg}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    @if($vmc!='')
                        <div class="col-sm-2  col-xs-5">
                            Veg main course
                            <ol>
                                @foreach($vmc as $veg)
                                    <li>{{ $veg}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    @if($nvmc!='')
                        <div class="col-sm-2  col-xs-5">
                            Non Veg main course
                            <ol>
                                @foreach($nvmc as $non_veg)
                                    <li>{{ $non_veg}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    @if($bread!='')
                        <div class="col-sm-2  col-xs-5">
                            Bread
                            <ol>
                                @foreach($bread as $items)
                                    <li>{{ $items}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                </div>
                <div class="row">
                    @if($rice!='')
                        <div class="col-sm-offset-1 col-sm-2  col-xs-5">
                            Rice
                            <ol>
                                @foreach($rice as $items)
                                    <li>{{ $items}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    @if($salad!='')
                        <div class="col-sm-2  col-xs-5">
                            Salad
                            <ol>
                                @foreach($salad as $items)
                                    <li>{{ $items}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    @if($dessert!='')
                        <div class="col-sm-2  col-xs-5">
                            Dessert
                            <ol>
                                @foreach($dessert as $items)
                                    <li>{{ $items}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    @if($sd!='')
                        <div class="col-sm-2  col-xs-5">
                            Soft drinks
                            <ol>
                                @foreach($sd as $items)
                                    <li>{{ $items}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                    @if($hd!='')
                        <div class="col-sm-2  col-xs-5">
                            Hard drinks
                            <ol>
                                @foreach($hd as $items)
                                    <li>{{ $items}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row" style="color:grey;background-color: lightgray;padding-bottom: 15px;padding-top: 15px;">
            <div class="col-sm-offset-1 col-xs-offset-1 col-sm-11 col-xs-11">
                Thanks for booking.Hope to see you again.<br>
                Best Regards<br>
                Team Bash India<br>
                Contact: +91-880 035 5421 | +91-965 418 2422<br>
                Email: vikram@bashindia.com
            </div>
        </div>
    </div>
    @endsection
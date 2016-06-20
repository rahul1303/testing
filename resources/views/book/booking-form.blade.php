
<style>
    body{
        background-color: darkseagreen;
    }
        .cursor{
            cursor:pointer;
        }
        .red{
            color:red;
        }
        .green{
            color: green;
        }
        .grey{
            color:grey;
        }
        li{
            list-style-type: none;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMiRrDGYah6qSeZT-qC3ObLSTmbvCeb74&libraries=places"
            type="text/javascript"></script>
    <div class="container-fluid app" style=" margin-top:30px;margin-bottom: 70px;">
        <div class="row" >
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Complete the details and proceed to <b>CheckOut</b></div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-offset-5 col-xs-offset-2">
                                    <h2>Booking Details</h2>
                                    <svg  width="500" height="1">
                                        <line x1="0" y1="0" x2="215" y2="00" style=" stroke:lightgrey;stroke-width:1" />
                                    </svg>
                                </div>
                            </div>
                            <input type="hidden" id="lat_val" value="{{ $details->venue_lat }}">
                            <input type="hidden" id="lon_val" value="{{ $details->venue_lon }}">
                            <input type="hidden" id="info" value="{{ $details->venue_name }}">
                            <input type="hidden" id="min_entries" value="{{ $details->person }}">
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-sm-offset-2 col-sm-6 col-xs-offset-1">
                                    <div class="row" style="margin-top: 40px;">
                                        <div class="col-sm-3 col-xs-5">
                                            <b>Venue Name :</b>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            {{ $details->venue_name}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-5">
                                                    <b>Location :</b>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    {{ $details->address_1}}, {{ $details->address_2 }},
                                                    <br>{{ $details->locality }}, {{ $details->city }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-5">
                                                    <b>Timing :</b>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    <?php $val=$details->timings; ?>
                                                    @foreach($val as $value)
                                                        {{ $value->start_time }} to {{ $value->end_time }}<br>
                                                        @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-5">
                                                    <b>Manager Name</b>
                                                </div>
                                                <div class="col-sm-3 col-xs-6">
                                                    {{ $details->manager_name}}
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
                                                    0{{ $details->mobile}}
                                                    <br>{{ $details->tel }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-5">
                                                    <b>Min Entries :</b>
                                                </div>
                                                <div class="col-sm-3 col-xs-6" style="color:red">
                                                    <b>{{ $details->person}}</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-5">
                                                    <b>Capacity :</b>
                                                </div>
                                                <div class="col-sm-3 col-xs-6" style="">
                                                    {{ $details->capacity}}
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
                                                    {{ $details->duration}} hours
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-sm-offset-0 col-xs-11 col-xs-offset-1">
                                    <div id="map_show" style="width: 300px;height:280px;"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row" style="margin-bottom: 40px;">
                                <div class="col-sm-offset-5 col-xs-offset-2">
                                    <h2>Fill your Details</h2>
                                    <svg  width="500" height="1">
                                        <line x1="0" y1="0" x2="215" y2="00" style=" stroke:lightgrey;stroke-width:1" />
                                    </svg>
                                </div>
                            </div>
                            <form id="booking_form" class="form-horizontal" role="form" action="{{ url('your-ticket-is-booked') }} " method="post" enctype="multipart/form-data">
                                <input type="hidden" name="vendor_id" id="id" value="{{ $details->id }}">
                                <input type="hidden" name="u" id="u" value="{{ $max=$max+1 }}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <input type="hidden" id="veg_starter">
                                <input type="hidden" id="hidden_veg_starter" placeholder="veg_starter">
                                <input type="hidden" id="non_veg_starter">
                                <input type="hidden" id="hidden_non_veg_starter" placeholder="non_veg_starter">
                                <input type="hidden" id="non_veg_main_course">
                                <input type="hidden" id="hidden_non_veg_main_course" placeholder="non_veg_main_course">
                                <input type="hidden" id="veg_main_course">
                                <input type="hidden" id="hidden_veg_main_course" placeholder="veg_main_course">
                                <input type="hidden" id="bread">
                                <input type="hidden" id="hidden_bread" placeholder="bread">
                                <input type="hidden" id="rice">
                                <input type="hidden" id="hidden_rice" placeholder="rice">
                                <input type="hidden" id="salad">
                                <input type="hidden" id="hidden_salad" placeholder="salad">
                                <input type="hidden" id="dessert">
                                <input type="hidden" id="hidden_dessert" placeholder="desert">
                                <input type="hidden" id="hard_drinks">
                                <input type="hidden" id="hidden_hard_drinks" placeholder="hard">
                                <input type="hidden" id="soft_drinks">
                                <input type="hidden" id="hidden_soft_drinks" placeholder="soft_drinks">

                                <div class="row">
                                    <div class="col-sm-11 col-sm-offset-1 col-xs-offset-1 col-xs-11">
                                        <div class="form-group date123">
                                            <label class="control-label  col-sm-offset-1 col-sm-3  col-xs-3" for="booking date">Booking Date :</label>
                                            <div class="  col-sm-3 col-xs-7">
                                                <?php $time_to_prpare=$details->time_to_prepare*86400; ?>
                                                <input type="date" class="form-control booking_date" min="<?php echo date('Y-m-d', time()+$time_to_prpare); ?>" required name="booked_date" id="datepicker">
                                                <?php date_default_timezone_set('Asia/Kolkata')?>
                                                <input type="hidden" value="{{ date('Y-m-d h:i:s A') }}" name="booking_date" >
                                                <input type="hidden" id="date_avail" value="0" >
                                            </div>
                                            <div class="col-sm-3" id="date_checker" style="font-size: 13px;"></div>
                                        </div>
                                        <div class="form-group timing">
                                            <?php $val=$details->timings->first(); ?>
                                            <label class="control-label  col-sm-offset-1 col-sm-3  col-xs-3" for="booking time">Booking Time :</label>
                                            <div class="  col-sm-3 col-xs-7">
                                                <input type="time" id="timing" class="form-control" min="{{ $val->start_time }}" max="21:00:00" name="booked_time">
                                                <input type="hidden" id="time_hour" value="{{ $details->duration}}" >
                                                <input type="hidden" id="time_avail" value="0" >
                                            </div>
                                                <div class="col-sm-3" id="time_checker" style="font-size: 13px;"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-offset-1  col-sm-3  col-xs-3" for="buffet">Select buffet :</label>
                                            <div class="  col-sm-3 col-xs-7">
                                                <select name="combo" id="combo" class="form-control" required>
                                                    <?php $v=$details->combos  ?>
                                                    <option value="" selected><span style="color: #B0BEC5">Select</span></option>
                                                    @foreach($v as $va)
                                                        <option value="{{$va->combo}}">{{$va->combo}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="budget  col-sm-offset-4  col-sm-4 col-xs-offset-2 col-xs-10" for="buffet"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class=" col-sm-offset-4  col-sm-4 col-xs-offset-2 col-xs-5">
                                                <img class="ajax-loader" src="{{ asset('storage/app/images/ajax-loader.gif') }}" style="display: none;"></div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="veg_starter buffet col-sm-offset-0  col-sm-3  col-xs-6" for="buffet"><ul class="veg_starter_1"></ul></div>
                                            <div class="non_veg_starter buffet col-sm-offset-0  col-sm-3  col-xs-6" for="buffet"><ul class="non_veg_starter_1"></ul></div>
                                            <div class="veg_main_course buffet col-sm-offset-0  col-sm-3  col-xs-6" for="buffet"></div>
                                            <div class="non_veg_main_course buffet col-sm-offset-0  col-sm-3  col-xs-6" for="buffet"></div>
                                        </div>
                                        <div class="form-group ">
                                        <div class="bread  col-sm-offset-0  buffet col-sm-3  col-xs-6" for="buffet"></div>
                                            <div class="rice  col-sm-offset-0 buffet col-sm-3  col-xs-6" for="buffet"></div>
                                            <div class="salad  col-sm-offset-0 buffet col-sm-3  col-xs-6" for="buffet"></div>
                                            <div class="desert  col-sm-offset-0 buffet col-sm-3  col-xs-6" for="buffet"></div>
                                            <div class="soft_drinks  col-sm-offset-0 buffet  col-sm-3  col-xs-6" for="buffet"></div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="hard_drinks  col-sm-offset-0 buffet col-sm-3  col-xs-6" for="buffet"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-offset-1  col-sm-3  col-xs-3" for="person">Total person :</label>
                                            <div class="  col-sm-3 col-xs-7">
                                                <input type="number" class="form-control person_val" name="person" min="{{ $details->person }}" max="{{ $details->capacity }}"v-model="min_entry">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-offset-1  col-sm-3  col-xs-3" for="person">Your name :</label>
                                            <div class="  col-sm-3 col-xs-7">
                                                <input type="text" class="form-control" name="name"  placeholder="Your name"value ="{{old('name')}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-offset-1  col-sm-3  col-xs-3" for="email">Email :</label>
                                            <div class="  col-sm-3 col-xs-7">
                                                <input type="email" class="form-control" name="email"  placeholder="Your email" data-toggle="tooltip"  title="Your booking ticket will be mailed to this email id"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-offset-1  col-sm-3  col-xs-3" for="contact">Phone  :</label>
                                            <div class="  col-sm-3 col-xs-7">
                                                <div class="input-group">
                                                <span class="input-group-addon " style="background-color: #B0BEC5 ">+91</span>
                                                    <input type="numeric" class="form-control" name="phone" required maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" placeholder="enter phone number" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"  style="border: 1px solid gray">
                                        <div class="form-group" style="margin-top: 20px;">
                                            <label class="control-label  col-sm-offset-1  col-sm-4  col-xs-7" for="total person">Total person  :</label>
                                                <span class="control-span col-sm-offset-2 grey col-sm-3  col-xs-5" for="total person">@{{ min_entry }}</span>
                                        </div>
                                        <div class="form-group" >
                                            <label class="control-label  col-sm-offset-1  col-sm-4  col-xs-7" for="total person">Cost/person  :</label>
                                            <span class="control-label cost_person  col-sm-3  grey col-xs-5" for="total person"></span>
                                            <input type="hidden" name="budget_person" id="budget_person" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-offset-1  col-sm-4  col-xs-7" for="total cost">Total cost  :</label>
                                            <span class="control-label total_cost grey  col-sm-3  col-xs-5" for="total person"></span>
                                            <input type="hidden" name="total_cost" id="total_cost" >
                                            <input type="hidden" name="final_cost" id="final_cost" >
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  effective_1 col-sm-offset-1  col-sm-4  col-xs-7" for="effective" style="color:green;"></label>
                                            <span class="control-label effective  col-sm-3  col-xs-5" for="advance"></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-offset-1  col-sm-4  col-xs-7" for="advance">Advance payment : (30% of the total cost)</label>
                                            <span class="control-label advance_payment grey  col-sm-3  col-xs-5" for="advance"></span>
                                            <input type="hidden" name="advance_payment" id="advance_payment" >
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label  col-sm-offset-1  col-sm-4  col-xs-0" for="promo_code"></label>
                                            <div class="  col-sm-8 col-xs-12 col-sm-offset-3">
                                                <div class="input-group">
                                                    <input type="hidden" value="" id="coupon_name">
                                                    <input type="hidden" value="0" id="applied" >
                                                    <input type="hidden"  value="" id="coupon_discount">
                                                    <input type="text" class="form-control " name="promo_code" id="promo_code" placeholder="Have Promo Code?">
                                                   <input type="hidden" name="bash" value="asd" id="bashindia">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-info apply_now" type="button">Apply Now!</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2  col-sm-10 col-xs-offset-1">
                                                <input type="checkbox" id="i_accept"> I accept this venue
                                                <a href="{{ asset('view/'.$details->venue_type.'/'.$details->city.'/'.$details->slug.'/'.$details->unique.'#venue-terms') }}" text_decoration="none" target="_blank">terms and condition</a>
                                            </div>
                                            </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4  col-sm-3 col-xs-offset-4">
                                                <button  name="paynow" class="btn btn-danger paynow" style="" disabled>Pay Now</button></div>
                                            <input type="hidden" value="{{date("Y-m-d")}}" id="date">
                                        </div>
                                        <div>
                                            <ul class="error"></ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
   @include('venue.js_booking_form');
    @include('venue.js_booking_form_promo_total');
<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js"></script>
    <script>

        new Vue({
            el:'.app',
            data:{
                min_entry:$('#min_entries').val(),
                person_cost:$('#budget_person').val()

            }
        });
        $(document).ready(function(){
            $('#i_accept').change(function() {
                if ($(this).prop('checked')) {
                    $('.paynow').removeAttr('disabled');
                }
                else {
                    $('.paynow').attr('disabled','disabled');
                }
            });
        });
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMiRrDGYah6qSeZT-qC3ObLSTmbvCeb74&libraries=places"
        type="text/javascript"></script>
<style>
    html, body, #map_show {

        margin: 0;
        padding: 0;
        overflow-y: hidden;
        overflow-x: hidden;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }
    @media screen and (min-width: 767px) {
        .sidenav {
            height: 120%;
            overflow-y: scroll;
            overflow-x: hidden;
            text-align: left;
        }

        #slideshow {
            position: relative;
            width: 400px;
            height: 280px;
            padding: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
        }

        #slideshow > div {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
        }
        .img-slide{
            width: 380px;
            height: 260px;
        }
        #map_show_conatiner {position: relative;}

        .showHide {position: absolute; top: 0; right: 0; bottom: 0; left: 25%;height:120%;z-index: 3; overflow-y: scroll;
           overflow-x: hidden; padding-top: 20px;text-align: left;background-color: white  }
        #map_show {position: absolute; top: 0; right: 0; bottom: 0; left: 25%;height:120%;z-index: 0;}
        .book-now{
            width: 33%;
            position: fixed;
            bottom: 0;
            left: 1;
            font-size: 20px;
        }
        .book-now-margin{
            margin-bottom: 70px;
        }
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: 170px;
            overflow-y: scroll;
            overflow-x: hidden;
            text-align: left;
            font-size: 13px;
        }
        .showHide {
              height: 173px;
              overflow-y: scroll;
              overflow-x: hidden;
              text-align: left;

          }
        .book-now-margin{
            margin-bottom: 0px;
        }
        .book-now{
            position: relative;
            width: 130%;
            font-size: 14px;
            z-index:12200;
        }

        #slideshow {
            position: relative;
            width: 200px;
            height: 140px;
            padding: 5px;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
        }

        #slideshow > div {
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
        }
        .img-slide{
            width: 190px;
            height: 130px;
        }
        .row.content {height:auto;}
        #map_show {position: absolute; top: 273px; right: 0; bottom: 0; left: 0;height:55%;}
    }
    .get_venue{
        margin-top: 5px;
        padding: 10px;
        background-color: white;
        cursor: pointer;
    }
    .need_help{
        margin-top: 5px;
        padding: 10px;
        background-color: white;
        cursor: pointer;
    }
</style>
<input type="hidden" id="img" value="{{asset('storage/app/images/ajax-loader.gif')}}">
<div class="container-fluid text-center">
    <div class="row content" id="map_show_conatiner">
        <div class="col-sm-3 col-xs-6 sidenav">
            <div class="main_content">
                    <div class="row" style="margin-bottom: 20px;">
                    <input type="hidden" id="total" value="{{ $count }}">
                    <input type="hidden" id="type" value="{{ $venue }}">
                    <input type="hidden" id="location" value="{{ $location }}">
                    <input type="hidden" id="venue_id" value="{{ Input::has('id')?Input::get('id'):null }}">
                    <input type="hidden" id="budget" value="{{ Input::has('budget')?Input::get('budget'):'budget' }}">
                    <input type="hidden" id="capacity" value="{{ Input::has('capacity')?Input::get('capacity'):'capacity' }}">
                    <div class="col-sm-11 col-xs-11">
                        <select id="relevance" class="form-control">
                            <option value="" selected>Sort By: </option>
                            <option value="rupee">Sort By:Price</option>
                            <option value="c">Sort By:Capacity</option>
                            <option value="Rating" disabled>Rating(Coming Soon)</option>
                        </select>
                    </div>
                </div>
                <div class="filter_venue">
                    <center><img src="{{ asset('storage/app/images/ajax-loader.gif') }}" class="ajax-loader" style="display: none"></center>
                @foreach($get as $venue)
                    <div class="row get_venue" id="{{ $venue->id }}">
                        <div class="row" style=" margin-bottom: 10px;">
                            <div class="col-sm-6 col-xs-5" >
                                <b>{{ $venue->venue_name }}</b>
                            </div>
                            <div class="col-sm-6 col-xs-7" >
                                <span class="fa fa-inr"></span> {{ $venue->rupee }} per person
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px;color: gray">
                            <div class="col-sm-3 col-xs-5">
                                Address:
                            </div>
                            <div class="col-sm-9 col-sm-offset-0 col-xs-6 col-xs-offset-1"  style="color: grey">
                               {{ str_limit($venue->address_1.','.$venue->address_2.','.$venue->locality, 50)}}
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px;color: gray">
                            <div class="col-sm-3 col-xs-5">
                                Description:
                            </div>
                            <div class="col-sm-9 col-sm-offset-0 col-xs-offset-1 col-xs-6"  style="color: grey">
                                {{  str_limit($venue->discription, 50) }}
                            </div>
                        </div>
                    </div>
                @endforeach
                    @if($count=='0')
                        <div class="row need_help">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-sm-offset-3 col-sm-8 col-xs-offset-3 col-xs-9" >
                                    <b>Need Help?</b>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px;text-align: center">
                                <div class="col-sm-offset-0 col-sm-12 col-xs-12" >
                                    <b>Fill this form and our team will call you with in few moment</b>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px;text-align: center">
                                <div class="col-sm-offset-0 col-sm-6 col-xs-12" style="margin-top: 5px;" >
                                    <input type="text" name="name" class="name form-control" placeholder="Your Good Name">
                                </div>
                                <div class="col-sm-offset-0 col-sm-6 col-xs-12" style="margin-top: 5px;">
                                    <input type="numeric" class="form-control number" name="phone" required maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" placeholder="Contact number" />
                                </div>
                            </div>
                            <input type="hidden" class="url" value="{{URL::full()}}">
                            <div class="row" style="margin-bottom: 10px;text-align: center">
                                <div class="col-sm-offset-3 col-xs-offset-2 col-sm-6 col-xs-8" >
                                    <button class="btn btn-info form-control help">Help Me</button>
                                </div>
                            </div>
                            <ul class="error" style="margin-top: 20px;"></ul>
                        </div>
                        @endif
                    </div>
            </div>
    </div>
        @if($count=='0')
            <div class="col-sm-9  col-xs-12 text-left" id="map_show1">
                <img src="{{ asset('storage/app/images/error.jpg') }}" width="100%" height="100%">

            </div>

        @else
            <div class="col-sm-4 showHide" style="display: none;">
                @include('show.venue_detail')
            </div>
            <div class="col-sm-9 col-xs-12 text-left" id="map_show">

            </div>
        @endif
    </div>
</div>
<input type="hidden" id="latlon" value="
@foreach($get as $venue)
        {{$venue->venue_lat}},{{$venue->venue_lon}},{{ $venue->venue_name }};;
@endforeach
        ">
@include('show.js_dynamic_google_marker')
<script>


    $('.help').click(function(){
        var name=$('.name').val();
        var number=$('.number').val();
        var url=$('.url').val();
        $('.name').removeClass('alert alert-danger');
        $('.number').removeClass('alert alert-danger');
        $('.error').removeClass('alert alert-danger');
        $('.error').empty();
        var n=$.isNumeric($('.number').val())
        $('.name').val('');
        $('.number').val('');
        if(name==''){
            $('.error').append('<li>Name field incomplete.</li>');
            $('.error').addClass('alert alert-danger');
            $('.name').addClass('alert alert-danger');
        }
        else if(number==''){
            $('.error').append('<li>Phone Number field incomplete.</li>');
            $('.error').addClass('alert alert-danger');
            $('.number').addClass('alert alert-danger');
        }
        else if(n==true){
            $.get('{{ asset('ajax-help?name=') }}'+name+'&number='+number+'&url='+url,function(data){
                alert(data);
            });
        }
        else{
            $('.error').append('<li>Enter exact 10 digit number only.</li>');
            $('.error').addClass('alert alert-danger');
            $('.number').addClass('alert alert-danger');
        }
    });
</script>
<style>
    body {
        position: relative;
        background-color: lavender;
    }
    .affix {
        width: 87%;
        z-index: 9 !important;
        top: 60px;
        font-size: 20px;
    }
    .affix li{
        margin-left: 30px;
    }

    .navbar {
        margin-bottom: 0px;
    }

    .affix ~ .container-fluid {
        position: relative;
        top: 50px;
    }


</style>
<body data-spy="scroll" data-target=".navbar" data-offset="130">

<div class="container-fluid" style="height:500px;">

    <link rel="stylesheet" href="{{asset('slider-venue/css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('slider-venue/css/animate.min.css')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1">
                <div class="wrap" >
                    <div id="cxslide_fade" class="cxslide_fade">
                        <div class="box">
                            <ul class="list">
                                <?php $val=$details->images;?>
                                @foreach($val as $image)
                                    <li>
                                        <img src="{{ asset('storage/app/'.$image->path) }}" width="960" height="370">
                                        <div class="txt">
                                            <div class="row" style="margin-top: 220px;">
                                                <div class="col-sm-10 col-xs-4" style="padding:15px;background-color:black;opacity:.7;color:white;font-size: 35px;">
                                                    <b><i>{{ $details->venue_name }}</i></b>
                                                </div>
                                            </div>
                                            <div class="row" style="color: gold;margin-top: 25px;font-size: 25px" >
                                                <div class="col-sm-12 col-xs-4">
                                                    <b>Average <i class="fa fa-inr "></i> {{ $details->rupee }} per person</b>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                            </ul>
                        </div>
                        <ul class="btn clearfix">
                            @foreach($val as $image)
                                <li>
                                    <img src="{{ asset('storage/app/'.$image->path) }}" width="150" height="52">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <script src="http://cdn.staticfile.org/jquery/1.7.2/jquery.min.js"></script>
                    <script src="{{asset('slider-venue/js/jquery.cxslide.min.js')}}"></script>
                    <script>

                        $('#cxslide_fade').cxSlide({
                            events: 'mouseover',
                            type: 'fade',
                            speed: 300
                        });
                    </script>
                 </div>
            </div>
        </div>
    </div>

</div>
<hr style="border-color:gray;">
    <br>

<div class="container">
    <nav class=" row navbar navbar-default" data-spy="affix" data-offset-top="505">
        <div class="container-fluid">
            <div class=" navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#details">Details</a></li>
                        <li><a href="#cuisines">Cuisines</a></li>
                        <li><a href="#buffet">Buffet</a></li>
                        <li><a href="#amenities">Amenities</a></li>
                        <li><a href="#venue-terms">Terms</a></li>
                        <li><a href="#bookNow" style="background-color: red;color: white"><b>Book Now</b></a></li>
                        <li><a href="#review">User Review</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="row" >
        <div class="col-sm-12">
            <div  id="details" style="padding-top: 20px;">
                <div class="row" style="padding: 20px;background-color: white;border-radius:.2%;border-bottom:2px solid blue;">
                    <div class="row bg-info" style="margin-left: -10px;padding: 10px 10px 10px 25px;">
                        <h1>Details</h1>
                    </div>
                    @include('venue.details')
                </div>

            </div>
            <div id="cuisines" style="padding-top: 20px;">
                <div class="row" style="padding: 20px;background-color: white;border-radius:.2%;border-bottom:2px solid blue;">
                    <div class="row bg-info" style="margin-left: -10px;padding: 10px 10px 10px 25px;">
                        <h1>Cuisines</h1>
                    </div>
                    @include('venue.cuisne')
                </div>
            </div>
            <div id="buffet" style="padding-top: 20px;">
                <div class="row" style="padding: 20px;background-color: white;border-radius:.2%;border-bottom:2px solid blue;">
                    <div class="row bg-info" style="margin-left: -10px;padding: 10px 10px 10px 25px;">
                        <h1>Buffet Available</h1><span style="font-size: 10px;">(cuisine may vary during the time of booking)</span>
                    </div>
                        @include('venue.buffet')
                </div>
            </div>
            <div id="amenities" style="padding-top: 20px;">
                <div class="row" style="padding: 20px;background-color: white;border-radius:.2%;border-bottom:2px solid blue;">
                    <div class="row bg-info" style="margin-left: -10px;padding: 10px 10px 10px 25px;">
                        <h1>Amenities</h1>
                    </div>
                        @include('venue.amenities')
                </div>
            </div>
            <div id="venue-terms" style="padding-top: 20px;">
                <div class="row" style="padding: 20px;background-color: white;border-radius:.2%;border-bottom:2px solid blue;">
                    <div class="row bg-info" style="margin-left: -10px;padding: 10px 10px 10px 25px;">
                        <h1>Venue Terms</h1>
                    </div>
                        @include('venue.terms')
                </div>
            </div> <div id="bookNow" style="padding-top: 20px;">
                <div class="row" style="padding: 20px;background-color: white;border-radius:.2%;border-bottom:2px solid blue;">
                    <div class="row bg-info" style="margin-left: -10px;padding: 10px 10px 10px 25px;">
                        <h1>Book Now</h1>
                    </div>
                        @include('venue.book-now')
                </div>
            </div>
            <div id="review" style="padding-top: 20px;">
                <div class="row" style="padding: 20px;background-color: white;border-radius:.2%;border-bottom:2px solid blue;">
                    <div class="row bg-info" style="margin-left: -10px;padding: 10px 10px 10px 25px;">
                        <h1>User Review</h1>
                    </div>
                        @include('venue.customer_review')
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 70px;">
    </div>
</div>
</body>
    <div class="section"  style="  background:url('{{ asset('storage/app/images/about-us-background.gif') }}');background-repeat: repeat;padding-top: 20px;padding-bottom: 20px;">
    <div class="container" style="background-color: aliceblue;padding-top: 50px;padding-bottom: 50px;">
        <div class="row" style="color: coral;margin-bottom: 40px;">
            <div class="col-xs-offset-2 col-sm-offset-4">
                <h2><b><i>Customer Stories</i></b></h2>
                <svg  width="500" height="2">
                    <line x1="0" y1="0" x2="250" y2="00" style="stroke:grey;stroke-width:2" />

                </svg>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-offset-0 col-sm-offset-0">
                <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
                <style>
                    .slider-wrap {
                        position: relative;
                        margin: 10px auto;
                        width: 100%;
                    }
                    .slider {
                        position: relative;
                        width: 80%;
                        margin: auto;
                    }
                    ul {
                        margin: 0;
                        padding: 0;
                    }
                    ul li {
                        list-style: none;
                        text-align: center;
                    }
                    ul li span {
                        display: inline-block;
                        vertical-align: middle;
                        width:85%;
                       }
                    .slider-arrow {
                        position: absolute;
                        top: 80px;
                        width: 40px;
                        height: 40px;
                        background-color: #666666;
                        color: #fff;
                        text-align: center;
                        text-decoration: none;
                        border-radius: 50%;
                    }
                    .sa-left {
                        left: 10px;
                    }
                    .sa-right {
                        right: 10px;
                    }
                    .slider .color{
                        background-color: azure;
                    }
                </style>
                </head>


                <div class="slider-wrap" style="margin-bottom: 70px;">
                    <div class="slider">
                        <ul>

                            <li > <span ><div class="row">
                                        <div class="col-xs-offset-0 col-sm-12 color" style=" border:1px darkgrey solid;border-width: 1px;">
                                            <div class="row" style=" margin-top:20px;">
                                                <div class="col-xs-offset-0 col-sm-offset-0">
                                                    <center><img src="https://scontent.fdel1-2.fna.fbcdn.net/hphotos-xpa1/v/t1.0-9/1375982_213701592140203_1987541785_n.jpg?oh=59475ff15e453b6285a099a2160feb10&oe=5798AE24" alt="photo to be put" style="width:50px;height:50px;border-radius: 30%;background-repeat: no-repeat;background-position: center center;background-size: cover;">
                                                        <br><br><b>Vikram Dhabi</b></center>
                                                </div>
                                            </div>
                                            <div class="row" style=" margin-top:30px;margin-bottom:30px;text-align: justify">
                                                <div class="col-xs-offset-0 col-sm-offset-0">
                                                    <center>Its really a great time for me and i found this website awesome lokkin further to book more party from this product</center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </span></li>

                            <li> <span ><div class="row">
                                        <div class="col-xs-offset-0 col-sm-12 color " style="border: 1px darkgrey solid;border-width: 1px;">
                                            <div class="row" style="margin-top:20px;">
                                                <div class="col-xs-offset-0 col-sm-offset-0">
                                                    <center><img src="{{ asset('storage/app/images/party-people.gif') }}" alt="photo to be put" style="width:50px;height:50px;border-radius: 30%;background-repeat: no-repeat;background-position: center center;background-size: cover;">
                                                        <br><br><b>Vikram Dhabi</b></center>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:30px;margin-bottom:30px;text-align: justify">
                                                <div class="col-xs-offset-0 col-sm-offset-0">
                                                    <center>Its really a great time for me and i found this website awesome lokkin further to book more party from this product</center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </span></li>

                            <li> <span ><div class="row">
                                        <div class="col-xs-offset-0 col-sm-12 color" style="border: 1px darkgrey solid;border-width: 1px;">
                                            <div class="row" style="margin-top:20px;">
                                                <div class="col-xs-offset-0 col-sm-offset-0">
                                                    <center><img src="{{ asset('storage/app/images/party-peopl.gif') }}" alt="photo to be put" style="width:50px;height:50px;border-radius: 30%;background-repeat: no-repeat;background-position: center center;background-size: cover;">
                                                        <br><br><b>Vikram Dhabi</b></center>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:30px;margin-bottom:30px;text-align: justify">
                                                <div class="col-xs-offset-0 col-sm-offset-0">
                                                    <center>Its really a great time for me and i found this website awesome lokkin further to book more party from this product</center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </span></li>

                        </ul>
                    </div>
                    <a href="#" class="slider-arrow sa-left">
                        <svg  width="50" height="50">
                            <line x1="10" y1="20" x2="25" y2="10" style="stroke:white;stroke-width:2" />
                            <line x1="10" y1="20" x2="25" y2="30" style="stroke:white;stroke-width:2" />

                        </svg></a>
                    <a href="#" class="slider-arrow sa-right">
                        <svg  width="50" height="50">
                            <line x1="15" y1="10" x2="30" y2="20" style="stroke:white;stroke-width:2" />
                            <line x1="15" y1="30" x2="30" y2="20" style="stroke:white;stroke-width:2" />

                        </svg>
                    </a>
                </div>
                <script src="http://code.jquery.com/jquery-latest.min.js"></script>
                <script src="{{asset('customer/jquery.lbslider.js')}}"></script>
                <script>
                    jQuery('.slider').lbSlider({
                        leftBtn: '.sa-left',
                        rightBtn: '.sa-right',
                        visible: 3,
                        autoPlay: true,
                        autoPlayDelay: 5
                    });
                </script>


            </div>
        </div>

    </div>
    </div>
</div>
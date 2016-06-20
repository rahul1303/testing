<style>
    .white-a{
        color: white;
        opacity: .9;
        font-size: 15px;
    }
</style>
<style>

    a:hover{
        text-decoration:none
    }
</style>
<div class="container-fluid" style=" padding-bottom:50px;
        background:   linear-gradient(
        rgba(0,0,0, .6),
        rgba(0,0,0,.6)
        ),url('{{ asset('storage/app/images/party-people3.jpg') }}') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        opacity: .9;
        background-color: black;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 30px;
        background-repeat: no-repeat;
        width:100%;">
    <div class="row">
        <div class="col-xs-offset-3 col-sm-offset-1 col-sm-3 col-xs-8">
            <div class="row">
                <div class="col-xs-offset-1 col-sm-offset-3">
                    <h3 style="color: white"><b>FROM THE BLOG</b></h3>
                    <svg  width="500" height="2">
                        <line x1="0" y1="0" x2="200" y2="00" style=" stroke:grey;stroke-width:1" />
                    </svg>
                </div>
            </div>
           <!-- <div class="row white-a" style="margin-top: 20px;">
                <div class="col-sm-offset-0 col-xs-offset-0 col-sm-12 col-xs-3">
                <h2><center><b>Coming Soon</b></center></h2>
                </div>
            </div>  -->
       <div class="row white-a" style="margin-top: 20px;">
                <div class="col-sm-offset-0 col-xs-offset-0 col-sm-4 col-xs-3">
                    <a href="http://blog.bashindia.com/party/5-benifits-of-throwing-a-party" target="_blank">
                        <img src="http://blog.bashindia.com/wp-content/uploads/2016/03/sydney111.jpg" width="60px" height="50px" style="border-radius: 10%">
                    </a>
                </div>
                <div class="col-sm-8 col-xs-8" style="text-align: justify;">
                    <a href="http://blog.bashindia.com/party/5-benifits-of-throwing-a-party" target="_blank" style="color: white">
                        "5 benefits of throwing a party"</a>
                </div>
                <svg  width="500" height="2" style="margin-top:10px;">
                    <line x1="10" y1="0" x2="330" y2="00" style=" stroke:grey;stroke-width:1 " />
                </svg>
            </div>
            <!--      <div class="row white-a" style="margin-top: 20px;">
                <div class="col-sm-offset-0 col-xs-offset-0 col-sm-4 col-xs-3">
                    <a href="#" target="_blank">
                        <img src="{{asset('storage/app/images/party-people4.jpg')}}" width="60px" height="60px" style="border-radius: 10%">
                    </a>
                </div>
                <div class="col-sm-8 col-xs-8" style="color: white;text-align: justify;">
                    <a href="#" target="_blank" style=" color: white;">"How are you world ? here we welcom our first blog"</a>
                </div>
                <svg  width="500" height="2">
                    <line x1="10" y1="0" x2="330" y2="00" style=" stroke:grey;stroke-width:1 " />
                </svg>
            </div> -->
        </div>
        <div class="col-xs-offset-3 col-sm-offset-0 col-sm-3 col-xs-8">
            <div class="row">
                <div class="col-xs-offset-2 col-sm-offset-4">
                    <h3 style="color: white"><b>Quick Links</b></h3>
                    <svg  width="500" height="2">
                        <line x1="0" y1="0" x2="150" y2="00" style=" stroke:grey;stroke-width:1" />

                    </svg>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-offset-1 col-xs-offset-0 text-center">
                    <ul class="white-a">
                        <li style="color:white;margin-left: 20px;"><a href="{{ url('/faq') }}" class="white-a" target="_blank"><small>FAQ</small></a></li>
                        <li style="margin-left: 20px;"><a href="{{ url('/#about-us') }}" class="white-a" ><small>About Us</small></a></li>
                        <li style=" margin-left: 20px;"><a href="our-team" class="white-a"><small>Our Team</small></a></li>
                        <li style=" margin-left: 20px;"><a href="careers" class="white-a"><small>Careers</small></a></li>
                        <li style=" margin-left: 20px;"><a href="{{ url('/#how-it-works') }}" id="how-it-works" class="white-a"><small>How It Works</small></a></li>
                        <li style=" margin-left: 20px;"><a href="http://blog.bashindia.com" class="white-a" target="_blank"><small>Blog</small></a></li>
                        <li style=" margin-left: 20px;"><a href="#contact-us" class="white-a" ><small>Contact Us</small></a></li>
                        <li style="margin-left: 20px;"><a href="{{ url('terms-&-conditions') }}" class="white-a"><small>Terms & Condition</small></a></li>
                        <li style="margin-left: 20px;"><a href="{{ url('privacy-policy') }}" class="white-a"><small>Privacy</small></a></li>
                        <li style="margin-left: 20px;"><a href="{{ url('/order-cancellation') }}" class="white-a"><small>Order Cancellation</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-offset-2 col-sm-offset-0 col-sm-5 col-xs-10">
            <div class="row">
                <div class="col-xs-offset-1 col-sm-offset-1">
                    <h3 style="color: white"><b>Get Awesome Offer</b></h3>
                    <svg  width="500" height="2">
                        <line x1="0" y1="0" x2="220" y2="00" style=" stroke:grey;stroke-width:1" />

                    </svg>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-offset-1 col-xs-offset-0">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Subscribe</label>
                            <div class="input-group">

                                <span class="input-group-addon" style="background-color: transparent";><i class="fa fa-envelope-o fa-fw"></i></span>
                                <input type="text" id="subscribe_email" class="form-control" style="color:white;background-color: transparent"; placeholder="Enter your email">
                            </div>
                        </div>
                        <button type="submit" id="subscribe" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="row" style="color:white;">
                <div class="col-sm-offset-2 col-xs-offset-2">
                    <div id="subscribe_error"></div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-xs-offset-1 col-sm-offset-1">
                    <h3 style="color: white"><b>Say Hello To Us</b></h3>
                    <svg  width="500" height="2">
                        <line x1="0" y1="0" x2="200" y2="00" style=" stroke:grey;stroke-width:1" />
                    </svg>
                </div>
                <div class="row white-a" style=" margin-top: 5px;">
                    <div class="col-sm-offset-2 col-xs-offset-2">
                        <small>hello@bashindia.com</small>
                    </div>
                </div>
                <div class="row white-a" style=" margin-top: 5px;">
                    <div class="col-sm-offset-2 col-xs-offset-2">
                        <small>+91-8800355421</small>
                    </div>
                </div>
                <div class="row white-a" style="margin-top: 5px;">
                    <div class="col-sm-offset-2 col-xs-offset-2">
                        <small>+91-9654182422</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#subscribe').click(function(){
            $('#subscribe_error').empty();
            var email=$('#subscribe_email').val();
            if(email=='')
            {
                $('#subscribe_error').append('Field empty');
            }
            else if (!email.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)) {
                $('#subscribe_error').append('Invalid email pattern');
            }
            else{
                $.get('{{asset('ajax-subscribe?email=')}}'+email,function(value){
                    $('#subscribe_error').append(value);
                });
            }
            return false;
        });
    });
</script>
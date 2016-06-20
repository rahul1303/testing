<style>
    .div-tag{
        position: relative;
    }
    .affix {
        top: 0;
        width: 100%;
        z-index: 9999;
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        background-color:#F8F8F8;
        border-color: #F8F8F8;

    }
    .affix a {
        color: #777 !important;
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }
    .affix-top .navbar-brand {
        font-size: 25px;
    }
    .affix-top .navbar-right {
        font-size: 15px;
    }
    .affix + .container-fluid {
        padding-top: 95px;
    }
</style>
<div class="div-tag">
    <div class="container-fluid" style="font-weight:bolder;background-color:#F8F8F8;color:#777;height:55px;border-color: transparent"><br>
        <div class="row">
            <div class="col-sm-offset-10 col-xs-offset-7">
                <i class="fa fa-phone fa-lg"></i><b> +91-8800355421</b>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-default" style="font-weight:bolder; border-color:transparent;margin-bottom: -10px;" data-spy="affix" data-offset-top="47">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" style="display: inline-flex;">
                <img src="{!! asset('storage/app/images/icon.png') !!}" style="margin-top: -15px;" width="45" height="45">&nbsp;&nbsp;
 <b>BashIndia</b></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <div class="nav navbar-nav">
            </div>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="{{ url('/') }}" id="book-now">BOOK NOW</a></li>
                <li><a href="{{ url('/#how-it-works') }}" id="how-it-works-link">HOW IT WORKS</a></li>
                <li><a href="{{ url('/#about-us') }}" id="about-us-link">ABOUT</a></li>
                <li><a href="{{ url('http://blog.bashindia.com') }}" target="_blank">BLOG</a></li>
                <li><a href="{{ url('/faq') }}" target="_blank">FAQ</a></li>
               <!--
                @if(auth()->guest())
                    @if(!Request::is('auth/login'))
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    @endif
                    @if(!Request::is('auth/register'))
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @endif
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
-->
            </ul>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function() {

        $('#how-it-works-link').click = function (){
            $(document).scrollTo('#how-it-works');
        }
        $('#about-us-link').click = function (){
            $(document).scrollTo('#about-us');
        }

    });
</script>

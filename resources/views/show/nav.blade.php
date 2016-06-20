<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                BashIndia</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <div class="nav navbar-nav">
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#"><i class="fa fa-phone fa-lg"></i><b> +91-8800355421</b></a></li>
                <li><a href="{{ url('/') }}" target="_blank">Home</a></li>
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

@extends('app')

@section('content')

    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;

        }

        body { min-height:2000px}
        .parallex-container {
            padding: 300px 0;
            margin: 0 0;
            background-size: 100%;
            background-position: 50% 50%;
            opacity: 1;
        }

        .parallex-content {
            width: 50%;
            margin: 0 auto;
            padding: 50px 10px;
            color: #000;
            font-size: 24px;
            font-weight: bold;
            border: 2px solid #fff;
            text-align: center;
            background: rgba(255,255,255,0.7);
        }
    </style>
    @include('bash.nav-top-index')

    <div class="parallex-container paralaxbg" style="background-image:url('{{ asset('storage/app/images/company-staff.jpg') }}')">
        <div class="parallex-content">

            <p> OUR TEAM </p>

        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{ asset('parallex/paralaxbg.js') }}"></script>
    <script>
        initParalaxBg();
    </script>
    <div class="container">
        <div class="row">
            <div class="col-xs-3" style="margin-bottom: 1140px;">

            </div>
        </div>
    </div>

@endsection
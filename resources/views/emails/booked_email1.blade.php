@extends('app')
<link rel="stylesheet" href="{{ asset('popup/css/style.css') }}"> <!-- Resource style -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('popup/js/main.js') }}"></script> <!-- Resource jQuery -->

@section('content')

    <div class="container">

    <div class="cd-popup is-visible" role="alert">
        <div class="cd-popup-container">
            <p>Use ***** code to get **% of discount</p>

            <a href="#0" class="cd-popup-close img-replace">Close</a>
        </div> <!-- cd-popup-container -->
    </div> <!-- cd-popup -->
</div>
    @endsection
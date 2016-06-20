@extends('showMaster')

@section('content')
    @include('show.nav')
    @include('show.filter')
    @include('show.venue')
    @foreach($get as $venue)
    @endforeach


    @endsection
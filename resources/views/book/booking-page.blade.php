@extends('master')

@section('content')

    @include('book.nav')
    @if($count>'0')
        @include('book.booking-form')
    @else
        @include('errors.page-not-found')
    @endif
@endsection
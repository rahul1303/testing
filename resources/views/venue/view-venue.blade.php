@extends('app')

@section('content')

    @include('book.nav')

    <div class="row" style="height: 50px;"></div>
    @if($count>'0')
        @include('venue.venue-details')
    @else
        @include('errors.page-not-found')
    @endif
    @include('footer')
@endsection
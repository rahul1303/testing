@extends('app')
<style>
    html{
        overflow-x: hidden;
    }
</style>
@section('content')

    @include('bash.nav-top-index')
    @include('bash.book-party-form')
    @include('bash.how-it-works')
    @include('bash.about-us')
    @include('bash.customers')
    @include('bash.trending')
    @include('bash.why-bashindia')
    @include('bash.around-the-web')
    @include('footer')
    @endsection
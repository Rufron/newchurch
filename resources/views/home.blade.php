@extends('layouts.index')

@section('title', 'Home')

@section('content')

    @include('home.partials.hero')
    @include('home.partials.abouts')
    @include('home.partials.sermons')
    @include('home.partials.portfolio')
    @include('home.partials.cta')
    @include('home.partials.contacta')

@endsection

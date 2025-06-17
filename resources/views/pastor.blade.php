@extends('layouts.index')
<header class="masterhead1"></header>

@section('title', 'Our Pastors')

@section('content')
{{-- pastors/displays/team--}}
    @include('pastors.displays.team')

@endsection

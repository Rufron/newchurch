@extends('layouts.index')
@section('title', 'Blog Details')
<!-- Masthead-->
@section('content')
    <header class="masterhead">

    </header>

    @include('events.blogs.main')
    @include('events.blogs.details')

@endsection

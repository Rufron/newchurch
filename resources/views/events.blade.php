@extends('layouts.index')
@section('title', 'Upcoming Events')
@section('content')

    <!-- Masthead title.blade.php-->
    @include('events.display.title')


    <!-- Services upcoming.blade.php-->
    @include('events.display.upcoming')

@endsection



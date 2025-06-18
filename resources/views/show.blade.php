@extends('layouts.index')
@section('title', $sermon->title)

@section('content')
    <header class="masterhead1"></header>

    @include('sermon.verses.individual')


@endsection

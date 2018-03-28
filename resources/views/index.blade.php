@extends('layouts.main')
    @section('static')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
    @endsection

@section('content')
    @include('index.greeting')
    @include('index.singupform')
    @include('index.posts')
    @include('index.questions')
    @include('index.library')
    @include('index.announces')
    @include('index.charity')
@endsection
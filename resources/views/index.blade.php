@extends('layouts.main')
    @section('static')
        <link rel="stylesheet" type="text/css" href="css/index.css" />
    @endsection

@section('content')
    @include('index.greeting')
    @include('index.singupform')
    @include('index.posts')
    @include('index.questions')
@endsection
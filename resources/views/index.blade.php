@extends('layouts.main')
    @section('static')
        <link rel="stylesheet" type="text/css" href="css/index.css" />
    @endsection

@section('content')
    @include('index.greeting')
@endsection
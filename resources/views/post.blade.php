@extends('layouts.main')
@section('title')
    {{ $post->title }}
@endsection
@section('navigation')
    <a href="/"><div class="home">На главную</div></a>
@endsection
@section('content')
    <div class="h1 title">{{ $post->title }}</div>
    <div class="content">{{ $post->content }}</div>
@endsection
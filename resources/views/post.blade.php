@extends('layouts.main')
@section('title')
    {{ $post->title }}
@endsection
@section('static')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post/style.css') }}" />
    <script type="text/javascript" src="{{ asset('js/post/comment.js') }}"></script>
@endsection
@section('navigation')
    <a href="/"><div class="home">На главную</div></a>
@endsection
@section('content')
    <div class="view">
        <div class="date">{{ $post->created_at }}</div>
        <div class="h1 title">{{ $post->title }}</div>
        <div class="flex tags">
        @foreach(explode(',', $post->tags) as $tag)
                <div class="tag">{{ $tag }}</div>
        @endforeach
        </div>
        <div class="content">{{ $post->content }}</div>
        <form class="flex column comment">
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
            <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
            <input type="text" name="name"  placeholder="Name..." />
            <input type="email" name="email" placeholder="Email..." />
            <textarea name="content"></textarea>
            <button type="submit" class="btn-success btn">Отправить</button>
        </form>
        <div data-post_id="{{ $post->id }}" class="comments">
            @if (!empty($comments))
                @foreach($comments as $comment)
                    <div class="comment">
                        <div class="author">{{ $comment->name }}</div>
                        <div class="time">{{ $comment->created_at }}</div>
                        <div class="content">{{ $comment->content }}</div>
                    </div>
                @endforeach
            @else
                <div class="sorry">Сорян</div>
            @endif
        </div>
    </div>
@endsection
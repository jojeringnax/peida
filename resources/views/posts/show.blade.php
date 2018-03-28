@extends('posts.main')
@section('content')
    <table class="table-bordered" style="width: 80%;margin: 0 auto; margin-top: 40px;">
        <thead>
        <tr><th class="number">Вы просматриваете статью под номером {{ $post->id }}</th></tr>
        <tr><th class="title">{{ $post->title }}</th></tr>
        </thead>
        <tbody>
        <tr><td class="content">{{ $post->content }}</td></tr>
        <tr><td class="tags">{{ $post->tags }}</td></tr>
        </tbody>
    </table>
    <div style="display: flex; align-items: center; justify-content: center; margin-top: 30px;">
        <button style="margin-right: 20px;" class="btn btn-primary" onclick="window.open('/posts', '_self')">Назад</button>
        <button style="margin-left: 20px;" class="btn btn-danger" onclick="<!-- TODO: Прописать удаление по кнопке -->">Удалить</button>
    </div>
@endsection
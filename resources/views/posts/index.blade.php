@extends('posts.main')
    @section('content')
        <div class="lead">
            Здравствуйте! Добро пожаловать на страницу просмотра и редактирования статей сайта Блог Светланы Пейда.
            <br /><br />
            @if (!count($posts))
                <div class="bg-danger">К сожалению, пока не создано ни одной статьи.<br />
                Для отображения данных необходимо <a href="create">создать статью</a> .</div>
            @endif
        </div>
        <div class="button_create"><a href="posts/create" type="button" class="btn btn-success">Создать статью</a></div>
        <div class="posts_table">
            <table class="table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Текст</th>
                    <th>Тэги</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @if (count($posts))
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->content, 0, 100).'...' }}</td>
                            <td>{{ $post->tags }}</td>
                            <td>{{ $post->active == 1 ? 'Активен' : 'Деактивирован'}}</td>
                            <td>
                                <a href="posts/{{ $post->id }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="posts/{{ $post->id }}/edit"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="destroy/{{ $post->id }}"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <td colspan="6" style="text-align: center;height: 200px;">Нет данных для отображения</td>
                @endif
                </tbody>
            </table>
        </div>
    @endsection
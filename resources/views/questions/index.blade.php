@extends('posts.main')
@section('content')
    <div class="lead">
        Здравствуйте! Добро пожаловать на страницу просмотра и редактирования вопросов сайта Блог Светланы Пейда.
        <br /><br />
        @if (!count($questions))
            <div class="bg-danger">К сожалению, не найдено ни одного вопроса.</div>
        @endif
    </div>
    <div class="posts_table">
        <table class="table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Вопрос</th>
                <th>Ответ</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @if (count($questions))
                @foreach ($questions as $question)
                    <tr>
                        <th scope="row">{{ $question->id }}</th>
                        <td>{{ $question->question }}</td>
                        <td>{{ $question->answer }}</td>
                        <td>{{ $question->active == 1 ? 'Активен' : 'Деактивирован'}}</td>
                        <td>
                            <a href="posts/{{ $question->id }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                            <a href="posts/{{ $question->id }}/edit"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="destroy/{{ $question->id }}"><span class="glyphicon glyphicon-trash"></span></a>
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
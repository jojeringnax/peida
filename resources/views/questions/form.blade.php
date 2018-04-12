@extends('posts.main')
@section('content')
    <div class="form_wrapper">
        <div class="question_question">{{ $question->question }}</div>
        <form class="answer" method="post" action="/questions/{{ $question->id }}">
            <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
            <input type="hidden" name="_method" value="PUT">
            <label for="answer">Введите ответ:</label>
            <textarea id="answer" name="answer">{{ $question->answer }}</textarea>
            <input name="status" type="checkbox" class="form-check-input" {{ $question->active ? 'checked' : '' }} id="active">
            <label class="form-check-label"for="active">Активная</label>
            <button type="submit" class="btn btn-success">Сохранить</button>
            <button class="btn btn-primary" href="questions">Назад</button>
        </form>
    </div>
@endsection
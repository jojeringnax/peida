@extends('posts.main')
@section('assets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/posts/form.css') }}" />
    <script type="text/javascript" src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script>
        $('document').ready( function() {
           var titleInput = $('input#title');
           titleInput.on('input', function() {
               if (titleInput.val().length >= 192) {
                   titleInput.val(titleInput.val().substring(0, 191))
               } else {
                   $('small').html('Введено ' + this.value.length + ' из 191');
               }
           });
           var tagsInput = $('input#tags'), tagsResult = $('div.tags-result');
           tagsInput.on('input', function() {
               if (window.tagsNum && tagsInput.val() === '') {
                   tagsResult.children().each(function() {$(this).remove()});
                   window.tagsNum = 0;
               }
               if (tagsInput.val().slice(-1) === ',') {
                   var tagsArray = tagsInput.val().split(",");
                   console.log(window.tagsNum + '  array lkbyf= ' + (tagsArray.length - 1));
                   if (window.tagsNum > tagsArray.length - 1) {
                       tagsResult.children()[window.tagsNum-1].remove();
                   } else {
                       tagsResult.append(
                           '<div class="cool_tag" data-number="'
                           + (window.tagsNum)
                           + '">'
                           + tagsArray[window.tagsNum || 0]
                           + '</div>')
                   }
                   window.tagsNum = tagsArray.length - 1;
               }
           });
        });
    </script>
@endsection
@section('content')
    <div class="form_wrapper">
        <form action="store">
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Введите название">
                <small id="titleHelp" class="form-text text-muted">Поле названия должно содержать не более 191 символа.</small>
            </div>
            <div class="form-group">
                <label for="content">Содержание</label>
                <textarea class="form-control" id="content" placeholder="Вводите, пожалуйста"></textarea>
            </div>
            <div class="form-group">
                <label for="tags">Тэги</label>
                <input type="text" class="form-control" id="tags" aria-describedby="tagsHelp" placeholder="Введите название">
                <small id="tagsHelp" class="form-text text-muted">Тэги необходимо указывать через запятую.</small>
            </div>
            <div class="tags-result">

            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" checked="checked" id="active">
                <label class="form-check-label"for="active">Активная</label>
            </div>
            @yield('button')
        </form>
    </div>
@endsection
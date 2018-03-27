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
           var tagsInput = $('input#tags'), tagsResult = $('div.tags-result'), html = '';
           var tagsArray;
           tagsInput.on('input', function() {
                tagsArray  = $(this).val().split(",");

                if ($(this).val().slice(-1) === ',' || $(this).val() === '') {
                    html = '';
                    for (i=0;i<tagsArray.length - 1;i++) {
                        html += '<div class="cool_tag">' + tagsArray[i] + '</div>';
                    }
                    tagsResult.html(html);
                } else {
                   if(tagsResult.children().last().html() === tagsArray[tagsArray.length - 2]) {
                       tagsResult.append('<div class="cool_tag">' + tagsArray[tagsArray.length - 1] + '</div>');
                   } else {
                       tagsResult.children().last().html(tagsArray[tagsArray.length - 1]);
                   }
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
                <div class="cool_tag" data-number="0"></div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" checked="checked" id="active">
                <label class="form-check-label"for="active">Активная</label>
            </div>
            @yield('button')
        </form>
    </div>
@endsection
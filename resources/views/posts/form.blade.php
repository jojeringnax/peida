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
                   $('small#titleHelp').html('Введено ' + this.value.length + ' из 191');
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
        <form action="/posts{{ $action == 'create' ? '' : '/'.$post->id }}" method="POST">
            <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
            @if ($action == 'edit')
            <input type="hidden" name="_method" value="PUT">
            @endif
            <div class="form-group">
                <label for="title">Название*</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Введите название" value="{{ $action == 'create' ? '' : $post->title }}" required="required">
                <small id="titleHelp" class="form-text text-muted">Поле названия должно содержать не более 191 символа.</small>
            </div>
            <div class="form-group">
                <label for="content">Содержание*</label>
                <textarea name="content" class="form-control" id="content" placeholder="Вводите, пожалуйста" required="required">{{ $action == 'create' ? '' : $post->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="tags">Тэги</label>
                <input name="tags" type="text" class="form-control" id="tags" value="{{ $action == 'create' ? '' : $post->tags }}" aria-describedby="tagsHelp" placeholder="Введите название">
                <small id="tagsHelp" class="form-text text-muted">Тэги необходимо указывать через запятую.</small>
            </div>
            <div class="tags-result">
                @if ($action == 'create')
                <div class="cool_tag"></div>
                @elseif ($action == 'edit')
                    @foreach (explode(',', $post->tags) as $tag)
                        <div class="cool_tag">{{ $tag }}</div>
                    @endforeach
                @endif
            </div>
            <div class="form-check">
                <input name="status" type="checkbox" class="form-check-input" checked="checked" id="active">
                <label class="form-check-label"for="active">Активная</label>
            </div>
            <div style="width: 100%; display: flex; align-items: center; justify-content: space-between;">
                <button class="btn btn-primary" href="posts">Назад</button>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
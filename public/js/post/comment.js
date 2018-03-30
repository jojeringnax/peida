$(document).ready( function() {
    var commentHtml =
'<div class="comment" data-comment_id="{{ id }}"><div class="author">{{ author }}</div><div class="time">{{ time }}</div><div class="content">{{ content }}</div></div>';
    $('form.comment').submit( function(e) {
        $.ajax({
            context: $('div.comments'),
            headers: {'X-CSRF-Token': $('input[name="_token"]').val()},
            method: 'post',
            dataType: 'json',
            data: $('form.comment').serialize(),
            url: '/comments/'
        }).done( function(data) {
            $(this).html(
                commentHtml.
                replace('{{ id }}', data['id']).
                replace('{{ author }}', data['name']).
                replace('{{ time }}', data['created_at']).
                replace('{{ content }}', data['content']) +
                '<div class=""deleteButton">Удалить</div>'
            );
            $('deleteButton').click( function() {
               $.ajax({
                   context: $(this).parent(),
                   url: '/comments/delete',
                   method: 'post',
                   data: $(this).data('comment_id')
               }).done( function() {
                  $(this).remove();
               });
            });
        });
        return false;
    });
});
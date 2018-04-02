$(document).ready( function() {
    var commentHtml =
'<div class="comment" data-comment_id="{{ id }}"><div class="author">{{ author }}</div><div class="time">{{ time }}</div><div class="content">{{ content }}</div>';
    $('form.comment').submit( function(e) {
        $.ajax({
            context: $('div.comments'),
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
                '<div class="deleteButton">Удалить</div></div>'
            );
            $('.deleteButton').click( function() {
                var commentDiv = $(this).parent('.comment');
               $.ajax({
                   url: '/comments/delete',
                   method: 'post',
                   data: 'comment_id=' + commentDiv.data('comment_id') + '&_token=' + $('form.comment > input#csrf-token').val()
               }).done( function() {
                  commentDiv.remove();
               });
            });
        });
        return false;
    });
});
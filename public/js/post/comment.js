$(document).ready( function() {
    $('form.comment').submit( function(e) {
        $.ajax({
            url: '/comments/',
            context: $('div.comments'),
            method: 'post'
        }).done(function () {
            $(this).addClass('done');
        });
        return false;
    });
});
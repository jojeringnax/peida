$(document).ready( function() {
    var posts = $('div.post.flex.column.no-image');
    var color;
    (function($) {
        $.rand = function(arg) {
            if ($.isArray(arg)) {
                return arg[$.rand(arg.length)];
            } else if (typeof arg === "number") {
                return Math.floor(Math.random() * arg);
            } else {
                return 4;  // chosen by fair dice roll
            }
        };
    })(jQuery);

    (function($) {
        $.colorification = function(element) {
            var colors = ['#007799', '#5599aa', '#ddaa55', '#99bbaa', '#da8800', '#b9967a'];
            element.each( function() {
                $(this).css('background-color', $.rand(colors));
            });
        }
    })(jQuery);

    $.colorification(posts);

    $('div.post.flex.column.image').click( function() {
        $.colorification(posts);
    });

    posts.hover( function() {
        color = $(this).css('background-color');
        $(this).css({'border': '2px solid ' + color, 'background-color': 'white'});
        $(this).children('.post_content').css('color', color);
    }, function() {
        $(this).css({'border': '2px solid white', 'background-color': color});
        $(this).children('.post_content').css('color', 'white');
    });

});
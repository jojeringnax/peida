$(document).ready( function() {
   $('form.question_create').submit( function() {
       $.ajax({
           url: 'questions',
           dataType: 'json',
           method: 'post',
           data: $(this).serialize(),
           success: function(data) {
               $('h5.question').html('Ваш вопрос отправлен');
               $('.modal-body.question').html('Благодарю за вопрос. Я отвечу на него в скором времени!');
               $('.modal-footer.question > button.btn-success').attr('disabled', 'disabled').html('Отправлено');
               $('button.question_form').data('toggle', '').data('target', '#');
           }

       });
       return false;
   });
   // SLider
    var wrapper = $('.questions_wrapper.flex');
    var sliderWidth = 200,
        slidesNumber = wrapper.children().length;
    wrapper.width(sliderWidth*slidesNumber);
    var rightButton = $('div.arrow.right'),
        leftButton = $('div.arrow.left');
    var hideArrow = function() {
        console.log('slidesNumber = ' + slidesNumber);
        console.log('margin-left = ' + wrapper.css('margin-left'));
        var margin = parseInt(wrapper.css('margin-left'));
        if (margin <= -(((slidesNumber - 2) * 200) - 10)) {
            rightButton.animate({'width': 0}, 300);
        } else {
            rightButton.animate({'width': 30}, 300);
        }
        if (margin >= -10) {
            leftButton.animate({'width': 0}, 300);
        } else {
            leftButton.animate({'width': 30}, 300);
        }
    };

    rightButton.click( function() {
        if (parseInt(wrapper.css('margin-left')) - 10 <= -(slidesNumber - 2)*200) {
            wrapper.animate({'margin-left': -(slidesNumber - 2)*200}, 300);
            hideArrow();
            return false;
        }
        wrapper.animate({'margin-left': '-=' + sliderWidth}, 300);
        setTimeout(function() {hideArrow()}, 301);
    });
    leftButton.click( function() {
        if (parseInt(wrapper.css('margin-left')) >= 0) {
            wrapper.animate({'margin-left': 0}, 300);
            hideArrow();
            return false;
        }
        wrapper.animate({'margin-left': '+=' + sliderWidth}, 300);
        setTimeout(function() {hideArrow()}, 301);
    });

});
$('document').ready( function() {
    var img1 = $('img#header_img_1'), img2 = $('img#header_img_2'), img3 = $('img#header_img_3');
    $('.img_header_wrapper').hover( function() {
        img1.animate({'opacity': 0}, 1000);
        setTimeout(function() {
            img3.animate({'opacity': 0}, 1000);
        }, 500)
    }, function() {
        img3.animate({'opacity': 1}, 1000);
        setTimeout(function() {
            img1.animate({'opacity': 1}, 1000)
        }, 500);
    });
});
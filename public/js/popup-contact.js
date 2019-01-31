$('.open_popup').click(function(){
    $('.overlay').fadeIn();
});

//закрыть на крестик
$('.js-close-campaign').click(function() {
    $('.overlay').fadeOut();

});
$(document).one('keydown', function(e){
    if (e.keyCode == 27) {
        js-overlay.close()
    }
});
//кнопка для скрола (.btn_up)

$('body').append('<button class="btn_up" />');

$('.btn_up').click(function(){
    $('body').animate({'scrollTop': 0}, 1000);
    $('html').animate({'scrollTop': 0}, 1000);
});

$(window).scroll(function(){
    if ($(window).scrollTop() > 200) {
        $('.btn_up').addClass('active');
    }
    else{
        $('.btn_up').removeClass('active');
    }
});


// закрыть по клику вне окна
// $(".js-overlay").on('click', function() {
//  $('.modal-window').fadeOut(300);
// }
// });

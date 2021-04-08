
// анимации
$(window).scroll(function() {
    $('.animated').each(function(){
        var imagePos = $(this).offset().top;
        var imageHght = $(this).outerHeight();

        var topOfWindow = $(window).scrollTop()+40;
        var heightOfWindow = $(window).height();

        var animName = $(this).data('anim');
        if (!$(this).data('atop')){
            var animTop = 0.9;
        }else{
            var animTop = $(this).data('atop');
        }

        if (imagePos < topOfWindow + heightOfWindow*animTop && imagePos+imageHght > topOfWindow) {
            $(this).css('visibility', 'visible').addClass(animName);
        } else if (imagePos+imageHght < topOfWindow || imagePos > topOfWindow+heightOfWindow) {
            $(this).css('visibility', 'hidden').removeClass(animName);
        }
    });
});

$(document).ready(function() {
    $('.animated').each(function(){
        var imagePos = $(this).offset().top;
        var imageHght = $(this).outerHeight();

        var topOfWindow = $(window).scrollTop()+40;
        var heightOfWindow = $(window).height();

        var animName = $(this).data('anim');

        if (imagePos < topOfWindow+heightOfWindow && imagePos+imageHght > topOfWindow) {
            $(this).css('visibility', 'visible').addClass(animName);
        } else if (imagePos+imageHght < topOfWindow || imagePos > topOfWindow+heightOfWindow) {
            $(this).css('visibility', 'hidden').removeClass(animName);
        }
    });
});


$(document).ready(function(){
    timer();
    //modal
    var overlay = $('#overlay');
    var open_modal = $('.open_modal');
    var close = $('.modal_close, #overlay');
    var modal = $('.modal_div');
    open_modal.click( function(event){
        event.preventDefault();
        var div = $(this).attr('data-modal');
        overlay.fadeIn(400,
            function(){
                $(div)
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200);
            });
    });
    close.click( function(){
        modal
            .animate({opacity: 0, top: '45%'}, 200,
            function(){
                $(this).css('display', 'none');
                overlay.fadeOut(400);
            }
        );
    });
    //dynamic content
    $('.open_modal').click(function(e){
        e.preventDefault();
        var h1 = $(this).data('h1');
        var h2 = $(this).data('h2');
        var h3 = $(this).data('h3');
        var btn = $(this).data('btn');
        var dop = $(this).data('dop');
        $('.modal_div').find('p.ttl').html('Оставить заявку');
        $('.modal_div').find('p.change').html('и наш консультант свяжется с Вами');
        $('.modal_div').find('#dop').val(dop);
        $('.modal_div').find('h1').html(h1);
        $('.modal_div').find('.hidden_title').val(h2);
        $('.modal_div').find('.hidden_title').val(h3);
        $('.modal_div').find('p.change').html(h2);
        $('.modal_div').find('button').text(btn);
        $('.modal_div').fadeIn();
    });
    //fixed menu & anchor
    $('.nav__menu a, .header__link a').on('click', function(e){
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });
    showSection(window.location.hash, false);
});
$(window).scroll(function(){
    checkSection();
});
function showSection(section, isAnimate){
    var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]');
    reqSectionPos = reqSection.offset().top - 50;

    if(isAnimate){
        $('body, html').animate({scrollTop: reqSectionPos}, 500);
    }else{
        $('body, html').scrollTop(reqSectionPos);
    }
}
function checkSection(){
    $('.section').each(function(){
        var
            $this = $(this),
            topEdge = $this.offset().top - 51,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
        if($(window).scrollTop() - 1000 > $('body').offset().top ){
            $('nav.nav').addClass('fix');
        } else{
            $('nav.nav').removeClass('fix');
        }
        if(topEdge < wScroll && bottomEdge > wScroll){
            var
                currentId = $this.data('section'),
                reqLink = $('.nav__menu a').filter('[href="#' + currentId + '"]');


            reqLink.closest('.nav__menu li').addClass('active')
                .siblings().removeClass('active');

            window.location.hash = currentId;
        }
    });
}

function checkform(form, goal_id) {
    var errors = "";
    $(form).find('input.req').each(function(){
        var val = $(this).val();
        if (val == "" || val == " " || val == "  "){
            errors = errors + "Пожалуйста, введите Ваше имя и телефон!";
            $(this).val('');
            $(this).addClass('error-input animated shake');
        }
    });
    if (errors != "") {
        return false;
    } else {
        $.post('./submit.php', $(form).serialize(), function (data) {
            if (data == "1") {
                $(form).find(".success").fadeIn(300).delay(1000).fadeOut(500);
                $(form).find('input.req').each(function() {
                    $(this).val('');
                });
                setTimeout(function(){
                    $('.modal_div') .animate({opacity: 0, top: '45%'}, 200).css('display', 'none');
                    $('#overlay').css('display', 'none').fadeOut(400);
                }, 3000);
            } else {

            }
        });
        return false;
    }
}















function timer(){
    var now = new Date();
    //newDate = new Date((now.getMonth()+1)+"/"+(now.getDate()+1)+"/"+now.getFullYear()+ "3:59:59");
    newDate = new Date(now.getFullYear(), (now.getMonth()), (now.getDate()+1), 3, 59, 59);
    var totalRemains = (newDate.getTime()-now.getTime());

    if (totalRemains>1)
    {
        var Days = (parseInt(parseInt(totalRemains/1000)/(24*3600)));
        var Hours = (parseInt((parseInt(totalRemains/1000) - Days*24*3600)/3600));
        var Min = (parseInt(parseInt((parseInt(totalRemains/1000) - Days*24*3600) - Hours*3600)/60));
        var Sec = parseInt((parseInt(totalRemains/1000) - Days*24*3600) - Hours*3600) - Min*60;
        if (Sec<10){Sec="0"+Sec}
        if (Min<10){Min="0"+Min}
        if (Hours<10){Hours="0"+Hours}
        if (Days<10){Days="0"+Days}
        $(".day").each(function() { $(this).text(Days); });
        $(".hour").each(function() { $(this).text(Hours); });
        $(".min").each(function() { $(this).text(Min); });
        $(".sec").each(function() { $(this).text(Sec); });
        setTimeout(timer, 1000);
    }
}

// function timer(){
//     var now = new Date();
//     //newDate = new Date((now.getMonth()+1)+"/"+(now.getDate()+1)+"/"+now.getFullYear()+" 3:59:59");
//     newDate = new Date(now.getFullYear(), (now.getMonth()), (now.getDate()+1), 3, 59, 59);
//
//     var totalRemains = (newDate.getTime()-now.getTime());
//
//     if (totalRemains>1)
//     {
//         var Days = (parseInt(parseInt(totalRemains/1000)/(24*3600)));
//         var Hours = (parseInt((parseInt(totalRemains/1000) - Days*24*3600)/3600));
//         var Min = (parseInt(parseInt((parseInt(totalRemains/1000) - Days*24*3600) - Hours*3600)/60));
//         var Sec = parseInt((parseInt(totalRemains/1000) - Days*24*3600) - Hours*3600) - Min*60;
//         if (Sec<10){Sec="0"+Sec}
//         if (Min<10){Min="0"+Min}
//         if (Hours<10){Hours="0"+Hours}
//         if (Days<10){Days="0"+Days}
//         $(".day").each(function() { $(this).text(Days); });
//         $(".hour").each(function() { $(this).text(Hours); });
//         $(".min").each(function() { $(this).text(Min); });
//         $(".sec").each(function() { $(this).text(Sec); });
//         setTimeout(timer, 1000);
//     }
// }

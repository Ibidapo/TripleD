/**
 * Created by USER on 11/9/2017.
 */
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(document).scrollTop() > 5) {
            $('.m-navbar').css('background','white');
        }else{
            $('.m-navbar').css('background','rgba(255, 255, 255, 0.5)');
        }
    });

    $("#threeLines").on("click", function(){
        $(this).toggleClass("active");
    });

    $('#nav-modal').on('hidden.bs.modal', function() {
        $("#threeLines").removeClass("active");
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $('.book, .order-box, .td-card, .c-order').mouseenter(function() {
        $(this).children('p').fadeOut('slow');
        $(this).children('span').fadeIn('slow');
    }).mouseleave(function() {
        $(this).children('span').fadeOut('slow');
        $(this).children('p').fadeIn('slow');
    });
});
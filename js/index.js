$(document).ready(function(){


    $('body').css('display', 'none');
    $("body").fadeIn(1000);

    $( "#home" ).click(function() {
        $("body").fadeIn(1000);
    });

    $('#myCarousel').carousel();
});


$('#rvp-meFade, #rvp-h2me').hover(function(){
    $('#rvp-me').addClass('rvp-scale');
    $('#rvp-meFade').addClass('rvp-fader');
    $('#rvp-h2me').addClass('rvp-finisher');
}, function(){
    $('#rvp-me').removeClass('rvp-scale');
    $('#rvp-meFade').removeClass('rvp-fader');
    $('#rvp-h2me').removeClass('rvp-finisher');
})

$('#rvp-shivaniFade, #rvp-h2shivani').hover(function(){
    $('#rvp-shivani').addClass('rvp-scale');
    $('#rvp-shivaniFade').addClass('rvp-fader');
    $('#rvp-h2shivani').addClass('rvp-finisher');
}, function(){
    $('#rvp-shivani').removeClass('rvp-scale');
    $('#rvp-shivaniFade').removeClass('rvp-fader');
    $('#rvp-h2shivani').removeClass('rvp-finisher');
})

$('#rvp-sumanthFade, #rvp-h2sumanth').hover(function(){
    $('#rvp-sumanth').addClass('rvp-scale');
    $('#rvp-sumanthFade').addClass('rvp-fader');
    $('#rvp-h2sumanth').addClass('rvp-finisher');
}, function(){
    $('#rvp-sumanth').removeClass('rvp-scale');
    $('#rvp-sumanthFade').removeClass('rvp-fader');
    $('#rvp-h2sumanth').removeClass('rvp-finisher');
})

$(document).on("scroll", function(){
    var pageTop = $(document).scrollTop()
    var pageBottom = pageTop + $(window).height()
    var divs = $('.faders')

    for (var i = 0; i < divs.length; i++){
        if($(divs[i]).position().top < pageBottom){
            $(divs[i]).addClass("rvp-up")
        }
        else{
            $(divs[i]).removeClass("rvp-up")
        }
    }
})
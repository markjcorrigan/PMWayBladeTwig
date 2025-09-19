/**
 * Created by DEVSCREENCAST on 3/4/2017.
 */

$(document).ready(function () {
    $('.gallery').slick({
        slidesToShow: 1,
        autoplay:true,
        autoplaySpeed:2000,
        fade:true,
        speed: 300,
        cssEase: 'linear',
        infinite: true
    });
});
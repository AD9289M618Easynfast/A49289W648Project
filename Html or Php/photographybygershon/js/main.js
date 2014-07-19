/**
 * *********************************************
 * Methods Summary: Home Slider
 * *********************************************
 */
$('.home-slider').bxSlider({
    mode: 'fade',
    auto: true,
    pause: 8000,
    pager: false,
    adaptiveHeight: true
});
/**
 * *********************************************
 * Methods Summary: Toggle Responsive Navigation
 * *********************************************
 */
$('.toggle-main-nav').click(function() {
    $('.main-nav').stop().slideToggle(500);
});
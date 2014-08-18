/**
 * *********************************************
 * Methods Summary: Smooth Scrolling
 * *********************************************
 */
var smoothscroll = function() {
    var $root = $('html, body');
    $('a').on('click', function() {
        $root.animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500);
        return false;
    });
};
/**
 * *********************************************
 * Methods Summary: Setup Client Sliders
 * *********************************************
 */
var setupClientSlider = function() {
    $('.client-slider').bxSlider({
        minSlides: 2,
        maxSlides: 5,
        slideWidth: 170,
        pager: false,
        controls: true
    });
};
/**
 * *********************************************
 * Methods Summary: Setup Audio Playlist
 * *********************************************
 */
var setupAudioPlayer = function() {
    var myPlaylist = new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_N",
        cssSelectorAncestor: "#jp_container_N"
    }, [
        {
            title: "Balada Boa",
            artist: "Gusttavo Lima",
            mp3: "audio/Baladaboa_GusttavoLima.mp3",
            poster: "http://www.portaldenoticias.net/wp-content/uploads/2014/05/gusttavo-lima1.jpg"
        }
    ], {
        playlistOptions: {
            enableRemoveControls: true
        },
        swfPath: "js",
        supplied: "webmv, ogv, m4v, oga, mp3",
        smoothPlayBar: true,
        keyEnabled: true,
        audioFullScreen: true
    });
};
/**
 * *********************************************
 * Methods Summary: Function to Load onload
 * *********************************************
 */
$(document).ready(function() {
    smoothscroll();
    setupClientSlider();
    setupAudioPlayer();
});

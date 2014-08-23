/**
 * *********************************************
 * Methods Summary: Preloading. Animation Happening before website is fully load
 * 
 * Default Variables:
 * holder: element which will hold the html content.
 * image: either display as image or default animation.
 * imageUrl: using custom image with static LINK, or related path.
 * imageWith: default is 100px
 * imageHeight: default is 100px
 * *********************************************
 */
var setPreloading = function(params) {
    if (!params) {
        params = {
            image: false
        };
    }
    var image = params.image ? params.image : false;
    var imageUrl = params.imageUrl ? params.imageUrl : 'http://easynfast.net/wp-content/themes/easynfast/images/theme/icon-loading.gif';



    /* Loading Images Html Tags */
    var imageTag = '<img class="loading-image" src="'
            + imageUrl + '"/>';

    /* Animation Html Tags */
    var animationTag = '<div class="loader">'
            + '<span>L</span>'
            + '<span>O</span>'
            + '<span>A</span>'
            + '<span>D</span>'
            + '<span>I</span>'
            + '<span>N</span>'
            + '<span>G</span>'
            + '<div class="covers">'
            + '<span></span>'
            + '<span></span>'
            + '<span></span>'
            + '<span></span>'
            + '<span></span>'
            + '<span></span>'
            + '<span></span>'
            + '</div>'
            + '</div>';

    /* Checking Condition to wether to show Image or Animation */
    var container = '<div class="enf-preloader-overlay">';
    if (image) {
        container += imageTag;
        var imagesProperty = new Image();
        imagesProperty.src = imageUrl;
        imagesProperty.onload = function() {
            document.getElementsByClassName('enf-preloader-overlay')[0].getElementsByClassName('loading-image')[0].setAttribute('width', this.width);
            document.getElementsByClassName('enf-preloader-overlay')[0].getElementsByClassName('loading-image')[0].setAttribute('height', this.height);
        };
    } else {
        container += animationTag;
    }
    container += '</div>';



    /* Insert stylesheet <link> into <head> */
    var stylesheetLink = '<link type="text/css" rel="stylesheet" href="css/enfpreload.css"/>';
    document.getElementsByTagName('head')[0].insertAdjacentHTML('beforeend', stylesheetLink);

    /* Insert html into <holder> */
    document.getElementsByTagName('body')[0].insertAdjacentHTML('afterbegin', container);

    /* Fadeout and Remove Loading Effects after page fully load. */
    window.onload = function() {
        (function(enf) {
            enf('.enf-preloader-overlay .loader').fadeOut();
            enf('.enf-preloader-overlay').fadeOut(500).queue(function() {
                enf(this).remove();
            });
            enf('body').css({'overflow-y': 'visible'});
        }(jQuery));
    };
};


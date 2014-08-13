/**
 * *********************************************
 * Methods Summary: Loading Animation While onload. 
 * IMPORTANT: Implement after <body> tag.
 * *********************************************
 */
var enfpreload = new function(data) {
    /**
     * *********************************************
     * Methods Summary: Basic Library Setup
     * *********************************************
     */
    this.libLink = 'http://lib.easynfast.net/';
    this.libName = 'enfpreload';
    this.combindLinkName = this.libLink + this.libName + '/' + this.libName;

    this.bodyTagArr = document.getElementsByTagName('body');
    this.headTagArr = document.getElementsByTagName('head');

    /**
     * *********************************************
     * Methods Summary: Set Image Variables.
     * Image Url
     * Image Width
     * Image Height
     * *********************************************
     */
    this.getLoadingImageValue = function(data) {
        this.imageUrl = 'http://easynfast.net/wp-content/themes/easynfast/images/theme/icon-loading.gif';
        this.imageWidth = '100';
        this.imageHeight = '100';

        if (data['imageUrl']) {
            this.gifImageUrl = data['imageUrl'];
        }
        if (data['imageWidth']) {
            this.imageWidth = data['imageWidth'];
        }
        if (data['imageHeight']) {
            this.imageHeight = data['imageHeight'];
        }
        return '<img class="loading-image" src="' + this.gifImageUrl + '" width= "' + this.imageWidth + '" height="' + this.imageHeight + '"/>';
    };

    this.preloadingCss = '<div class="enf-preloader-overlay">';

    if (data['mode'] === 'image') {
        this.preloadingCss += this.getLoadingImageValue(data);
    } else {
        this.preloadingCss += '<div class="loader"><span>L</span><span>O</span><span>A</span><span>D</span><span>I</span><span>N</span><span>G</span><div class="covers"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div></div>';
    }

    this.preloadingCss += '</div>';

    this.stylesheetLink = '<link type="text/css" rel="stylesheet" href="' + this.combindLinkName + '.css"/>';
    this.bodyTag = this.bodyTagArr[0];
    this.headTag = this.headTagArr[0];

    this.appendPreloadingHtml = function() {
        this.bodyTag.insertAdjacentHTML('afterbegin', this.preloadingCss);
    };

    this.appendStylesheet = function() {
        this.headTag.insertAdjacentHTML('beforeend', this.stylesheetLink);
    };

    window.onload = function() {
        jQuery('.enf-preloader-overlay .loader').fadeOut();
        jQuery('.enf-preloader-overlay').fadeOut('slow');
        jQuery('body').css({'overflow-y': 'visible'});
    };

    this.enfPreloadingOnload = function() {
        this.appendStylesheet();
        this.appendPreloadingHtml();
    };
};
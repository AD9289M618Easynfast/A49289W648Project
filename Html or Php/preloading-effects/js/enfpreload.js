var enfpreload = new function() {
    this.libLink = 'http://lib.easynfast.net/';
    this.libName = 'enfpreload';
    this.combindLinkName = this.libLink + this.libName + '/' + this.libName;

    this.bodyTagArr = document.getElementsByTagName('body');
    this.headTagArr = document.getElementsByTagName('head');

    this.preloadingCss = '<div class="enf-preloader-overlay"><div class="loader"><span>L</span><span>O</span><span>A</span><span>D</span><span>I</span><span>N</span><span>G</span><div class="covers"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div></div></div>';
    this.stylesheetLink = '<link type="text/css" rel="stylesheet" href="' + this.combindLinkName + '.css"/>';
    this.bodyTag = this.bodyTagArr[0];
    this.headTag = this.headTagArr[0];

    this.enfPreloadingOnload = function() {
        this.appendStylesheet();
        this.appendPreloadingHtml();
    };

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
};
enfpreload.enfPreloadingOnload();
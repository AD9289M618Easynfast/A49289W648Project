//(function($) {
//    $.preloading = function(element, options) {
//        this.options = {};
//
//        element.data('preloading', this);
//
//        /* Constructor */
//        this.init = function(element, options) {
//            this.options = $.extend({}, $.fn.preloading.defaultOptions, options);
//        };
//
//        /* Declare a Public Function */
//        this.sayHi = function(name) {
//            console.log('Hello ' + name);
//        };
//
//        this.init(element, options);
//    };
//
//
//    $.fn.preloading = function(options) {
//        return this.each(function() {
//            (new $.preloading($(this), options));
//        });
//    };
//
//    /* Defind Default Values */
//    $.preloading.defaultOptions = {
//        class: 'Javascript Plugins',
//        student: 'Bao Anh Le'
//    };
//}(jQuery));

(function($) {

    $.watermark = function(element, options) {
        this.options = {};

        element.data('watermark', this);

        this.init = function(element, options) {
            this.options = $.extend({}, $.watermark.defaultOptions, options);

            //Manipulate element here ...       
        };

        //Public function
        this.greet = function(name) {
            console.log('Hello, ' + name + ', welcome to Script Junkies!');
        };

        this.init(element, options);
    };

    $.fn.watermark = function(options) { //Using only one method off of $.fn  
        return this.each(function() {
            (new $.watermark($(this), options));
        });
    };

    $.watermark.defaultOptions = {
        class: 'watermark',
        text: 'Enter Text Here'
    }
})(jQuery);
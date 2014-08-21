(function($, undefined) {
    $.fn.showMe = function(params) {
        var options = $.extend(
                {},
                {
                    holder: $('.content-div111'),
                    message: 'This is the My First Ever Plugin!',
                    toggle: false
                },
        params);

        this.on('click', function() {

            var holder = options.holder;
            if (options.toggle) {
                holder.html(options.message).slideUp();
            } else {
                holder.html(options.message).slideDown();
            }

            options.toggle = !options.toggle;
            console.log(options.toggle);
        });
    };
}(jQuery));
/**
 * Customizer scripts
 */
(function($) {
    wp.customize('display_entry_title', function(value) {

        value.bind(function(to) {

            if (true === to) {
                $('.entry-title').removeClass('hide');
            } else {
                $('.entry-title').addClass('hide');
            }

        });

    });
    wp.customize('display_post_image', function(value) {

        value.bind(function(to) {

            if (true === to) {
                $('.post-image').removeClass('hide');
            } else {
                $('.post-image').addClass('hide');
            }

        });

    });
})(jQuery);
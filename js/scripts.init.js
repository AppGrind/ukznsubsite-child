/**
 * Customizer scripts
 */
(function($) {
    $(document).ready(function() {
        $(".owl-carousel.carousel-col-5").owlCarousel({
            nav: true,
            navText: ["", ""],
            rewindNav: true,
            loop: true,
            center: true,
            dots: false,
            responsiveClass: true,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                },
                // breakpoint from 480 up
                480: {
                    items: 3,
                    margin: 5,
                    animateOut: 'slideOutLeft',
                    animateIn: 'slideInRight',
                },
                // breakpoint from 768 up
                768: {
                    items: 5,
                    nav: true,
                    margin: 5,
                    animateOut: 'slideOutLeft',
                    animateIn: 'slideInRight',
                }
            }
        });
        $(".owl-carousel.carousel-col-4").owlCarousel({
            nav: true,
            navText: ["<i class='icon-arrow-left'></i>", "<i class='icon-arrow-right'></i>"],
            rewindNav: true,
            loop: true,
            dots: false,
            responsiveClass: true,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                },
                // breakpoint from 480 up
                480: {
                    items: 2,
                    margin: 5,
                    animateOut: 'slideOutLeft',
                    animateIn: 'slideInRight',
                },
                // breakpoint from 768 up
                768: {
                    items: 4,
                    nav: true,
                    margin: 5,
                    animateOut: 'slideOutLeft',
                    animateIn: 'slideInRight',
                }
            }
        });
        $('.owl-carousel').find('.owl-nav').removeClass('disabled');
        $('.owl-carousel').on('changed.owl.carousel', function(event) {
            $(this).find('.owl-nav').removeClass('disabled');
        });
        $('table.dTables').DataTable({
            responsive: true,
            dom: 'flrtipB',
            buttons: [
                'print', 'excel', 'pdf'
            ]
        });
    });
})(jQuery);
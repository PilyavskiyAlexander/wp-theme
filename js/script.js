
        $(function() {

            /* Start Carousel */
            $('#featured-posts').carouFredSel({
                auto: true,
                prev: '#prev2',
                next: '#next2',
            });
            /* End Carousel */


            /* Start Orbit Slider */
            $(window).load(function() {
                $('.post-gallery').orbit({
                    animation: 'fade',
                });
            });
            /* End Orbit Slider */


            /* Start Super fish */
            jQuery(document).ready(function(){
                jQuery('ul.sf-menu').superfish({
                    delay:         100,
                    speed:         'fast',
                    speedOut:      'fast',
                });
            });
            /* End Of Super fish */

        });

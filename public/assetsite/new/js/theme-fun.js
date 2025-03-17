$(document).ready(function() {



    $('.brand-slider').slick({
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        speed: 500,
        pauseOnHover: false,
        vertical: false,
        verticalSwiping: false,
        verticalReverse: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 5,
                    arrows: false,
                    draggable: true,
                    swipe: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    arrows: false,
                    draggable: true,
                    swipe: false,
                }
            },
            {
                breakpoint: 476,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    draggable: true,
                    swipe: false,
                }
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    draggable: true,
                    swipe: false,
                }
            }
        ]
    });

    $('.category-slider').slick({
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 500,
        pauseOnHover: false,
        vertical: false,
        verticalSwiping: false,
        verticalReverse: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    draggable: true,
                    swipe: false,
                }
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    draggable: true,
                    swipe: false,
                }
            }
        ]
    });

    $('.related-store-slider').slick({
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        speed: 500,
        pauseOnHover: false,
        vertical: false,
        verticalSwiping: false,
        verticalReverse: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    draggable: true,
                    swipe: false,
                }
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    draggable: true,
                    swipe: false,
                }
            }
        ]
    });

    // Mobile Nav

    $('.mobile-nav-btn').click(function() {
        $('.mobile-nav-main').addClass('active');
    });
    $('.mobile-nav-main .close_btn').click(function() {
        $('.mobile-nav-main').removeClass('active');
    });

    // Coupon Popup

    $('.btn-primry').click(function() {
        //$('.coupon-popup-sec').addClass('active');
    });
    $('.coupon-popup-sec  .close-btn').click(function() {
        $('.coupon-popup-sec').removeClass('active');
    });

    // single Product detail tabbing

    $('.store-tabbing .tabs li').click(function() {
        $('.store-tabbing .tabs li').removeClass('active');
        $('.store-tabbing .tabbing-content .tab-content').removeClass('active');
        $(this).addClass('active');
        var tab_id = $(this).index();
        tab_id += 1;
        $('.store-tabbing .tabbing-content .tab-content:nth-child(' + tab_id + ')').addClass('active');

    });
    $('.store-tabbing .tabs li:first-child').addClass('active');
    $('.store-tabbing .tabbing-content .tab-content:first-child').addClass('active');


    // Home Page Accordion

    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            var links = this.el.find('.accordion-title');
            links.on('click', {
                el: this.el,
                multiple: this.multiple
            }, this.dropdown)
        }

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
            };
        }
        var accordion = new Accordion($('.accordion-container'), false);
    });

    // Coupon Popup

    $('.tile-btn').click(function() {
        $('.coupon-popup-sec').addClass('active');
    });
    $('.coupon-popup-sec  .close-btn').click(function() {
        $('.coupon-popup-sec').removeClass('active');
    });

    $('.browse-btn').click(function() {
        $('.browse-btn').toggleClass('active');
        $('.browse-sub-menu').toggleClass('active');
        $('.categories-btn').removeClass('active');
        $('.categories-sub-menu').removeClass('active');
    });
    $('.categories-btn').click(function() {
        $('.categories-btn').toggleClass('active');
        $('.categories-sub-menu').toggleClass('active');
        $('.browse-btn').removeClass('active');
        $('.browse-sub-menu').removeClass('active');
    });

    $('.show-hide-btn .show-btn').click(function() {
        $('.show-btn').addClass('hide');
        $('.hide-btn').addClass('show');
        $('.hide-btn').removeClass('hide');
        $('.show-btn').removeClass('show');

        $('.link_widget .col-lg-4 .footer-links').addClass('show');
    });

    $('.show-hide-btn .hide-btn').click(function() {
        $('.show-btn').addClass('show');
        $('.show-btn').removeClass('hide');
        $('.hide-btn').addClass('hide');
        $('.hide-btn').removeClass('show');

        $('.link_widget .col-lg-4 .footer-links').removeClass('show');
    });

});
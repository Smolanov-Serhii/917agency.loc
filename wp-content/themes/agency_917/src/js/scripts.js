$(document).ready(function () {

    // $('html, body').stop().animate({
    //     scrollTop: $('#rev').offset().top - 200
    // }, 0);
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 50, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

    var $menu = $("header");
    $(window).scroll(function () {
        var winScrollTop = $(this).scrollTop();
        if ($(this).scrollTop() > 20 && $menu.hasClass("default")) {
            $menu.removeClass("default").addClass("moved");
        } else if ($(this).scrollTop() <= 20 && $menu.hasClass("moved")) {
            $menu.removeClass("moved").addClass("default");
        }
    });
    if ($(".header__popup").length) {
        document.addEventListener('wpcf7mailsent', function (event) {
            $('.header__popup').fadeIn(300);
        }, false);
        $(".header__popup-close").on("click", function () {
            $('.header__popup').fadeOut(300);
        });
    }
    ;

    $(".header__burger").click(function () {
        $('.header').toggleClass('burger');
        $(this).toggleClass('active');
        $('.header__wrapper').toggleClass('active');
        $('body').toggleClass('locked');
    });
    $(".header__nav-close").click(function () {
        $('.header__wrapper').removeClass('active');
        $('.header__burger').removeClass('active');
        $('.header').removeClass('burger');
        $('body').removeClass('locked');
    });
    const div = document.querySelector('.header');

    document.addEventListener('click', (e) => {
        const withinBoundaries = e.composedPath().includes(div);
        if (!withinBoundaries) {
            $('.header__wrapper').removeClass('active');
            $('.header').removeClass('burger');
            $('body').removeClass('locked');
        }
    })

    function PopupInit() {
        document.addEventListener('wpcf7mailsent', function (event) {
            $('.popup-zapis').fadeOut(300);
            $('.call-back').fadeOut(300);
            $('#success-send').fadeIn(300);
            // $('.wpcf7-response-output').empty();
            setTimeout(function () {
                $('#success-send').fadeOut(300);
                $('body').removeClass('locked');
            }, 2000);

        }, false);
        $(".js-form").click(function () {
            // $('body').addClass('locked');
            // $('.popup-zapis').fadeIn(300);
            $('body').addClass('locked');
            $('.call-back').fadeIn(300);
        });
        // $(".js-messenger").click(function () {
        //     $('body').addClass('locked');
        //     $('.call-back').fadeIn(300);
        // });
        $(".popup-zapis__close").click(function () {
            $('body').removeClass('locked');
            $('.call-back').fadeOut(300);
            $('.popup-zapis').fadeOut(300);
        });

        const div = document.querySelector('.header');

        document.addEventListener('click', (e) => {
            const withinBoundaries = e.composedPath().includes(div);

            if (!withinBoundaries) {
                $('.js-burger').removeClass('active');
                $('.header').removeClass('clicked');
                $('.header__burger').removeClass('active');
                $('.header__mobile').fadeOut(300);
            }
        })
    }

    PopupInit();

    function TabsElements(){
        if($('.tabs-elements').length){
            $(".tabs-elements .tabs-nav-item").click(function() {
                $(".tabs-elements .tabs-nav-item").removeClass("active");
                $(this).addClass("active");
                $(this).closest(".tabs-elements").find('.tabs-content-item').hide().removeClass("active").eq($(this).index()).addClass("active").css("display", "flex")
                    .hide()
                    .fadeIn();
            }).eq(0).addClass("active");
        }
    }
    TabsElements();

    function FaqClick(){
        if($('.cases').length){
            $(".cases__item-title").click(function() {
                if ($(this).closest('.cases__item').hasClass('active')){
                    $(this).closest('.cases__item').removeClass("active");
                } else {
                    $(this).closest('.cases').find('.cases__item').removeClass("active");
                    $(this).closest('.cases__item').addClass("active");
                }
            });
        }
    }
    FaqClick();

    function ProductSlider() {
        var TeamSlider = new Swiper(".productions .swiper-container", {
            slidesPerView: 4.5,
            spaceBetween: 14,
            loop: true,
            breakpoints: {
                '320': {
                    slidesPerView: 1.3,
                },
                '500': {
                    slidesPerView: 1.5,
                },
                '768': {
                    slidesPerView: 2.5,
                },
                '1024': {
                    slidesPerView: 3.5,
                },
            },
        });
    }

    if ($('.productions').length) {
        ProductSlider();
    }

    function PopupInit(){
        $(".js-popup").click(function () {
            $('body').addClass('locked');
            $('.popup-zapis').fadeIn(300);
        });
        $(".popup-zapis__close").click(function () {
            $('body').removeClass('locked');
            $(this).closest('.popup-zapis').fadeOut(300);
        });
    }
    PopupInit();

    function GalerySlider(){
        if ($(".interest").length){
            const largeSlider = ()=>{
                let largeSliders = document.querySelectorAll('.interest__gallery.swiper-container ')
                largeSliders.forEach((slider, index)=>{
                    // this bit checks if there's more than 1 slide, if there's only 1 it won't loop
                    let sliderLength = slider.children[0].children.length
                    let result = (sliderLength > 1) ? true : false
                    const swiper = new Swiper(slider, {
                        slidesPerView: 'auto',
                        observeParents: true,
                        preloadImages: true,
                        observer: true,
                        spaceBetween: 8,
                        loop: false,
                        speed: 300,
                    });
                })
            }
            largeSlider();
        }
    }
    GalerySlider();

    function ModalInit() {
        $(".has-video").click(function () {
            let $FileLink = $(this).data('video');
            $('.video-modal video source').attr('src', $FileLink);
            $(".video-modal video")[0].load();
            $('.video-modal').fadeIn(300);
        });
        $(".video-modal__close").click(function () {
            $('body').removeClass('locked');
            $('.video-modal video').get(0).pause();
            $(this).closest('.video-modal').fadeOut(300);
            $('.video-modal video source').attr('src', '');
        });
    }
    ModalInit();

    function GalleryClick(){
        if($('.interest__gallery').length){
            $(".interest__item-btn").click(function() {
                $(this).closest('.interest__item').find('.interest__gallery').fadeToggle(300);
                $(this).closest('.interest__item').find('.interest__item-btn').toggleClass('open');
            });
        }
    }
    GalleryClick();

});


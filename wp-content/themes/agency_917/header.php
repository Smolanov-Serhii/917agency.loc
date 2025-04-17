<?php
$post_id = get_the_ID();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<script>
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
            if ($('.wpcf7-numbers-only').length > 0) {
                var ele = document.querySelectorAll('.wpcf7-numbers-only')[0];
                ele.onkeypress = function(e) {
                    if (isNaN(this.value + "" + String.fromCharCode(e.charCode)))
                        return false;
                }
                ele.onpaste = function(e) {
                    e.preventDefault();
                }
            }
        }, 500);

    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        function updateVideoSource() {
            const video = document.getElementById("responsive-video");
            const sources = video.querySelectorAll("source");
            let selectedSource = null;

            sources.forEach((source) => {
                if (window.matchMedia(source.getAttribute("media")).matches) {
                    selectedSource = source.getAttribute("data-src");
                }
            });
            console.log(selectedSource)
            if (selectedSource) {
                video.src = selectedSource;
                video.load(); // Перезагрузка видео
            }
        }

        updateVideoSource();
    });
</script>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<div class="header__popup" style="display: none;">
    <div class="header__popup-container">
        <p>SUCCESS</p>
        <div class="header__popup-close">
            <div class="button button-black">
                <span>Message has been sanded</span>
            </div>
        </div>
    </div>
</div>
<div class="contact-form popup-zapis" style="display: none">
    <div class="contact-form__form popup-zapis__container">
        <div class="popup-zapis__close">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="44" height="44" fill="#FDFDFD" stroke="#EFEFEF"/>
                <path d="M13 32L22.5 22.5M32 13L22.5 22.5M22.5 22.5L32 32L13 13" stroke="#A6A6A6" stroke-linecap="round"/>
            </svg>
        </div>
        <?php echo do_shortcode( '[contact-form-7 id="e65f92f" title="Contact page form"]' );?>
    </div>
</div>
<div class="video-modal" style="display: none;">
    <div class="video-modal__container">
        <div class="video-modal__close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <rect x="4.57538" y="3" width="24" height="3" rx="1.5" transform="rotate(45 4.57538 3)" fill="#B0C1ED"></rect> <rect x="2.4541" y="19.9705" width="24" height="3" rx="1.5" transform="rotate(-45 2.4541 19.9705)" fill="#B0C1ED"></rect> </svg>
        </div>
        <video preload="true" autoplay loop height="auto" width="100%">
            <source src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<header class="header">
    <div class="header__container main-container">
        <div class="header__logo">
            <?php
                the_custom_logo();
            ?>
        </div>
        <div class="header__wrapper">
            <nav class="header__nav">
                <div class="header__nav-close">
                    <svg width="50" height="49" viewBox="0 0 50 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.015625" width="49" height="49" fill="white"/>
                        <path d="M47 1.75586L1.76231 46.9935" stroke="black" stroke-width="3" stroke-linecap="round"/>
                        <path d="M46.9961 46.9932L1.75841 1.75547" stroke="black" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav>
        </div>
        <div class="header__burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

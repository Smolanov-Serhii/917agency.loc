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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header__container main-container">
        <div class="header__logo">
            <?php
                the_custom_logo();
            ?>
        </div>
        <div class="header__burger">
            <span></span>
            <span></span>
            <span></span>
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

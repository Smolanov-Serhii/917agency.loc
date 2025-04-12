<?php
$post_id = get_the_ID();
?>
<section class="banner">
    <div class="banner__container main-container">
        <div class="banner__text">
            <div class="banner__title">
                <?php echo get_field('zagolovok_v_baner', $post_id)?>
            </div>
            <div class="banner__subtitle">
                <?php echo get_field('podzagolovok_v_baner', $post_id)?>
            </div>
            <div class="banner__buttons">
                <div class="button button-blue js-form">
                    <span><?php echo get_field('tekst_konsultacziya', $post_id)?></span>
                </div>
                <a href="<?php echo get_field('tekst_kosmetologiya_other', $post_id)?>" class="button button-white">
                    <span><?php echo get_field('tekst_kosmetologiya', $post_id)?></span>
                </a>
            </div>
            <div class="banner__rev">
                <a href="#rev" class="banner__rev-more">
                    <?php echo get_field('tekst_bolshe_otzyvov', $post_id)?>
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.04009 -2.80835e-07C9.04009 0.595896 9.62876 1.48572 10.2247 2.2326C10.9908 3.19632 11.9063 4.03715 12.956 4.67883C13.743 5.15988 14.6971 5.62166 15.4648 5.62166M15.4648 5.62166C14.6971 5.62166 13.7422 6.08344 12.956 6.56449C11.9063 7.20697 10.9908 8.04781 10.2247 9.00991C9.62876 9.75759 9.04009 10.649 9.04009 11.2433M15.4648 5.62166L0.00118656 5.62166" stroke="#515151" stroke-width="0.803094"/>
                    </svg>
                </a>
                <div class="banner__rev-img">
                    <img src="<?php echo get_field('kartinka_dlya_otzyva', $post_id)?>">
                </div>
                <div class="banner__rev-content">
                    <div class="banner__rev-title">
                        <?php echo get_field('zagolovok_otzyva', $post_id)?>
                    </div>
                    <div class="banner__rev-desc">
                        <?php echo get_field('tekst_otzyva', $post_id)?>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__img">
            <img src="<?php echo get_field('kartinka_v_banner', $post_id)?>" alt="">
        </div>
    </div>
</section>
<?php
$post_id = get_the_ID();
?>
<section class="banner">
    <div class="banner__bg" data-aos="zoom-in">
        <img src="<?php echo get_field('cover_for_video_banner', $post_id)?>" alt="">
    </div>
    <div class="banner__container main-container">
        <div class="banner__desc" data-aos="fade-up" data-aos-delay="100">
            <?php echo get_field('description-banner', $post_id)?>
        </div>
        <div class="banner__title" data-aos="fade-up" data-aos-delay="300">
            <?php echo get_field('title-banner', $post_id)?>
        </div>
        <div class="banner__subtitle" data-aos="fade-up" data-aos-delay="500">
            <?php echo get_field('subtitle-banner', $post_id)?>
        </div>
    </div>
</section>
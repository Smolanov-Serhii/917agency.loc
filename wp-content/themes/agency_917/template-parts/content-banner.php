<?php
$post_id = get_the_ID();
?>
<section class="banner">
    <div class="banner__bg" data-aos="zoom-in">
        <?php
        if (get_field('video_for_banner', $post_id)) {
            ?>
            <video class="lazy" width="100%" height="100%" poster="<?php echo the_field('cover_for_video_banner', $post_id); ?>" autoplay
                   preload="metadata" loop muted playsinline>
                <source src="<?php the_field('video_for_banner', $post_id); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <?php
        } else {
            ?>
            <img src="<?php echo get_field('cover_for_video_banner', $post_id) ?>" alt="">
            <?php
        }
        ?>
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
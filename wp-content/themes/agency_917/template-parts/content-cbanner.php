<?php
$post_id = get_the_ID();
?>
<section class="cbanner">
    <div class="cbanner__bg" data-aos="zoom-in">
        <div class="cbanner__video">
            <video class="lazy" width="100%" height="100%" poster="<?php echo the_field('cover_image_cbaner', $post_id); ?>" autoplay
                   preload="metadata" loop muted playsinline>
                <source src="<?php the_field('video_file_cbaner', $post_id); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="cbanner__container">
        <div class="cbanner__logo">
            <img src="<?php echo get_field('logo_image_cbaner', $post_id)?>">
        </div>
        <div class="cbanner__line main-container">
            <div class="cbanner__num" data-aos="fade-up" data-aos-delay="100">
                <a href="tel:+19176248075" data-aos="fade-up" data-aos-delay="300">+1 917 624 8075</a>
            </div>
            <div class="cbanner__title" data-aos="fade-up" data-aos-delay="300">
                CREATIVE STUDIO
            </div>
            <div class="cbanner__mail" data-aos="fade-up" data-aos-delay="500">
                <a href="mailto:INFO@917AGENCY.COM" data-aos="fade-up" data-aos-delay="500">INFO@917AGENCY.COM</a>
            </div>
        </div>
    </div>
</section>
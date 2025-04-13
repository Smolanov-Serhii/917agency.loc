<?php
$post_id = get_the_ID();
?>
<section class="about-img">
    <div class="about-img__container main-container">
        <div class="about-img__first" data-aos="fade-right" data-aos-delay="200">
            <img src="<?php echo get_field('left_image_about-img', $post_id)?>">
        </div>
        <div class="about-img__second" data-aos="fade-left" data-aos-delay="500">
            <img src="<?php echo get_field('right_image_about-img', $post_id)?>">
        </div>
    </div>
</section>
<?php
$post_id = get_the_ID();
?>
<section class="sbanner">
    <div class="sbanner__logo main-container" data-aos="zoom-in">
        <img src="<?php echo get_field('text_image', $post_id)?>">
    </div>
    <div class="sbanner__container">
        <div class="sbanner__img" data-aos="fade-up" data-aos-delay="300">
            <img src="<?php echo get_field('banner_image_services', $post_id)?>">
        </div>
        <div class="sbanner__line main-container">
            <div class="sbanner__left" data-aos="fade-up" data-aos-delay="100">
                <?php echo get_field('left_text_service_banner', $post_id)?>
            </div>
            <div class="sbanner__center" data-aos="fade-up" data-aos-delay="300">
                <?php echo get_field('center_text_service_banner', $post_id)?>
            </div>
            <div class="sbanner__right" data-aos="fade-up" data-aos-delay="500">
                <div class="sbanner__btn button button-white js-popup">
                    <span>Сontact</span>
                </div>
            </div>
        </div>
    </div>
</section>
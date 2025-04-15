<?php
//$post_id = get_the_ID();
$post_id = 15;
?>
<section class="pbanner">
    <div class="pbanner__container">
        <div class="pbanner__img" data-aos="fade-up" data-aos-delay="300">
            <img src="<?php echo get_field('banner_image_services', $post_id)?>">
        </div>
        <div class="pbanner__line main-container">
            <div class="pbanner__left" data-aos="fade-up" data-aos-delay="100">
                <?php echo get_field('left_text_service_banner', $post_id)?>
            </div>
            <div class="pbanner__center" data-aos="fade-up" data-aos-delay="300">
                <?php echo get_field('center_text_service_banner', $post_id)?>
            </div>
            <div class="pbanner__right" data-aos="fade-up" data-aos-delay="500">
                <div class="pbanner__btn button button-white js-popup">
                    <span>Сontact</span>
                </div>
            </div>
        </div>
    </div>
</section>
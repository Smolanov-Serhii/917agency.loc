<?php
$post_id = get_the_ID();
?>
<section class="contact-form">
    <div class="contact-form__container main-container">
        <div class="contact-form__img" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo get_field('image_for_form_block', $post_id)?>">
        </div>
        <div class="contact-form__form" data-aos="fade-left" data-aos-delay="300">
            <div class="contact-form__title section-title">
                <?php echo get_field('title_for_form_block', $post_id)?>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="e65f92f" title="Contact page form"]' );?>
        </div>
    </div>
</section>
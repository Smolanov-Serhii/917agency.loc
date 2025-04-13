<?php
$post_id = get_the_ID();
?>
<section class="full">
    <div class="full__container main-container">
        <div class="full__row">
            <div class="full__text" data-aos="fade-right" data-aos-delay="100">
                <div class="full__title section-title">
                    <?php echo get_field('title_full', $post_id)?>
                </div>
                <?php echo get_field('first_content_full', $post_id)?>
            </div>
            <div class="full__image" data-aos="fade-left" data-aos-delay="300">
                <div class="full__img">
                    <img src="<?php echo get_field('first_image_full', $post_id)?>">
                </div>
            </div>
        </div>
        <div class="full__row">
            <div class="full__image" data-aos="fade-right" data-aos-delay="500">
                <div class="full__img">
                    <img src="<?php echo get_field('second_image_full', $post_id)?>">
                </div>
                <div class="full__img">
                    <img src="<?php echo get_field('third_image_full', $post_id)?>">
                </div>
            </div>
            <div class="full__text" data-aos="fade-left" data-aos-delay="700">
                <?php echo get_field('second_content_full', $post_id)?>
            </div>
        </div>
    </div>
</section>
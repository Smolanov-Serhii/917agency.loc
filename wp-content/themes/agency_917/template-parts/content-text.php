<?php
$post_id = get_the_ID();
?>
<section class="text" data-aos="fade-up" data-aos-delay="300">
    <div class="text__container main-container">
        <div class="full__text text__text">
            <?php echo get_field('content_text_block', $post_id)?>
        </div>
    </div>
</section>
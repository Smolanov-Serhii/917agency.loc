<?php
$post_id = get_the_ID();
?>
<section class="two-lines">
    <div class="two-lines__container main-container">
        <span class="two-lines__title section-title" data-aos="fade-right">
            <?php echo get_field('main_text_two_lines', $post_id)?>
        </span>
        <span class="two-lines__desc" data-aos="fade-up">
            <?php echo get_field('small_text_two_lines', $post_id)?>
        </span>
    </div>
</section>
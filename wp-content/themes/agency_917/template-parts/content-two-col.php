<?php
$post_id = get_the_ID();
?>
<section class="two-col">
    <div class="two-col__container main-container">
        <?php
            if (get_field('title_about_block', $post_id)){
                ?>
                    <div class="two-col__title section-title" data-aos="fade-up" data-aos-delay="100">
                        <?php echo get_field('title_about_block', $post_id)?>
                    </div>
                <?php
            }
        ?>
        <div class="two-col__desc" data-aos="fade-up" data-aos-delay="300">
            <?php echo get_field('description_about_block', $post_id)?>
        </div>
    </div>
</section>
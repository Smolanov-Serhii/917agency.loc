<?php
$post_id = get_the_ID();
?>
<section class="video">
    <div class="video__container <?php if($post_id != 13){ echo 'main-container'; }?>" data-aos="fade-up" data-aos-delay="100">

        <?php
        if (get_field('title_video_block', $post_id)) {
            ?>
            <div class="video__title">
                <?php echo get_field('title_video_block', $post_id) ?>
            </div>
            <?php
        }
        ?>
        <?php
        if (get_field('vodeo_file_video_block', $post_id)) {
            ?>
            <video width="100%" height="100%" poster="<?php echo the_field('image_for_video', $post_id); ?>" autoplay
                   preload="metadata" loop muted playsinline>
                <source src="<?php the_field('vodeo_file_video_block', $post_id); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <?php
        } else {
            ?>
            <img src="<?php echo get_field('image_for_video', $post_id) ?>" alt="">
            <?php
        }
        ?>
    </div>
</section>
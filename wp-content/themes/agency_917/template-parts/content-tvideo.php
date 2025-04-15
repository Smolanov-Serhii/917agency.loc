<?php
//$post_id = get_the_ID();
$post_id = 13;
?>
<section class="tvideo">
    <div class="tvideo__container" data-aos="fade-up" data-aos-delay="100">
        <div class="tvideo__bg">
            <?php
            if (get_field('video_file_tvideo', $post_id)) {
                ?>
                <video width="100%" height="100%" poster="<?php echo the_field('image_tvideo', $post_id); ?>" autoplay
                       preload="metadata" loop muted playsinline>
                    <source src="<?php the_field('video_file_tvideo', $post_id); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <?php
            } else {
                ?>
                <img src="<?php echo get_field('image_tvideo', $post_id) ?>" alt="">
                <?php
            }
            ?>
        </div>
        <?php
        if (get_field('text_tvideo', $post_id)) {
            ?>
            <div class="full__text tvideo__text main-container" data-aos="fade-up" data-aos-delay="300">
                <?php echo get_field('text_tvideo', $post_id) ?>
            </div>
            <?php
        }
        ?>
    </div>
</section>
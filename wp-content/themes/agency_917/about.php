<?php
/* Template Name: About page */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <section class="banner">
            <div class="banner__bg" data-aos="zoom-in">
                <?php
                if (get_field('video_for_banner', $post_id)) {
                    ?>
                    <video class="lazy" width="100%" height="100%" poster="<?php echo the_field('cover_for_video_banner', $post_id); ?>" autoplay
                           preload="metadata" loop muted playsinline>
                        <source src="<?php the_field('video_for_banner', $post_id); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <?php
                } else {
                    ?>
                    <picture>
                        <source media="(min-width:768px)" srcset="<?php echo get_field('cover_for_video_banner', $post_id) ?>">
                        <img src="<?php echo get_field('cover_for_video_banner_mob', $post_id) ?>">
                    </picture>
                    <?php
                }
                ?>
            </div>
            <div class="banner__container main-container">
                <div class="banner__desc" data-aos="fade-up" data-aos-delay="100">
                    <?php echo get_field('description-banner', $post_id)?>
                </div>
                <div class="banner__title" data-aos="fade-up" data-aos-delay="300">
                    <?php echo get_field('title-banner', $post_id)?>
                </div>
                <div class="banner__subtitle" data-aos="fade-up" data-aos-delay="500">
                    <?php echo get_field('subtitle-banner', $post_id)?>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'two' ); ?>
        <?php get_template_part( 'template-parts/content', 'two-col' ); ?>
        <section class="video">
            <div class="video__container <?php if($post_id != 13){ echo 'main-container'; }?>" data-aos="fade-up" data-aos-delay="100">

                <?php
                if (get_field('title_video_block', 2)) {
                    ?>
                    <div class="video__title">
                        <?php echo get_field('title_video_block', 2) ?>
                    </div>
                    <?php
                }
                ?>
                <div class="video__video">
                    <?php
                    if (get_field('vodeo_file_video_block', 2)) {
                        ?>
                        <video id="responsive-video" width="100%" height="100%" poster="<?php echo the_field('image_for_video', 2); ?>" autoplay
                               preload="metadata" loop muted playsinline>
                            <source data-src="<?php the_field('vodeo_file_video_block_mob', 2); ?>" media="(max-width: 500px)" type="video/mp4">
                            <source data-src="<?php the_field('vodeo_file_video_block', 2); ?>" media="(min-width: 501px)" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <?php
                    } else {
                        ?>
                        <img src="<?php echo get_field('image_for_video', 2) ?>" alt="">
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
<!--        --><?php //get_template_part( 'template-parts/content', 'about-img' ); ?>
    </main>

<?php
get_footer();





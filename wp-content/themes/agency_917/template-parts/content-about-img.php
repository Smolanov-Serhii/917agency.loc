<?php
$post_id = get_the_ID();
?>
<section class="about-img">
    <div class="about-img__container main-container">
        <div class="about-img__first <?php if (get_field('left_video_about-img', $post_id)){ echo 'has-video';}?>" <?php if (get_field('left_video_about-img', $post_id)){ echo 'data-video="' . get_field('left_video_about-img', $post_id) . '"';}?> data-aos="fade-right" data-aos-delay="200">
            <img src="<?php echo get_field('left_image_about-img', $post_id)?>">
            <?php
            if (get_field('left_video_about-img', $post_id)){
                ?>
                <div class="interest__gallery-play">
                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="27.5" cy="27.5" r="27" stroke="white"/>
                        <path d="M36 27.5L23.25 34.8612L23.25 20.1388L36 27.5Z" fill="white"/>
                    </svg>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="about-img__second <?php if (get_field('right_video_about-img', $post_id)){ echo 'has-video';}?>" <?php if (get_field('right_video_about-img', $post_id)){ echo 'data-video="' . get_field('right_video_about-img', $post_id) . '"';}?> data-aos="fade-left" data-aos-delay="500">
            <img src="<?php echo get_field('right_image_about-img', $post_id)?>">
            <?php
            if (get_field('right_video_about-img', $post_id)){
                ?>
                <div class="interest__gallery-play">
                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="27.5" cy="27.5" r="27" stroke="white"/>
                        <path d="M36 27.5L23.25 34.8612L23.25 20.1388L36 27.5Z" fill="white"/>
                    </svg>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
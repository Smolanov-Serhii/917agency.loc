<?php
$post_id = get_the_ID();
?>
<section class="cases">
    <div class="cases__container">
        <?php
        $counter = 1;
        if( have_rows('cases_list',$post_id) ):
            echo '<div class="cases__list main-container">';
            while( have_rows('cases_list',$post_id) ) : the_row();
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $image1 = get_sub_field('image_1');
                $video1 = get_sub_field('video_1');
                $image2 = get_sub_field('image_2');
                $video2 = get_sub_field('video_2');
                ?>
                <div class="cases__item"  data-aos="fade-right" data-aos-delay="100">
                    <div class="cases__item-top"></div>
                    <div class="cases__item-title">
                        <span><?php echo '0' . $counter;?>.</span><?php echo $title;?>
                    </div>
                    <div class="cases__item-content">
                        <div class="cases__item-text full__text">
                            <?php echo $content;?>
                            <div class="cases__item-button button button-black js-popup">
                                <span>CONTACT</span>
                            </div>
                        </div>
                        <div class="cases__item-images">
                            <div class="cases__item-image <?php if ($video1){ echo 'has-video';}?>" <?php if ($video1){ echo 'data-video="' . $video1 . '"';}?>>
                                <img src="<?php echo $image1;?>" alt="<?php echo $title;?>">
                                <?php
                                if ($video1){
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
                            <?php
                                if ($image2) {
                                    ?>
                                        <div class="cases__item-image <?php if ($video1){ echo 'has-video';}?>" <?php if ($video1){ echo 'data-video="' . $video2 . '"';}?>>
                                            <img src="<?php echo $image2;?>" alt="<?php echo $title;?>">
                                            <?php
                                            if ($video2){
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
                                    <?php
                                }
                            ?>

                        </div>
                    </div>
                    <div class="cases__item-bottom"></div>
                </div>
                <?php
                $counter ++;
            endwhile;
            echo '</div>';
        endif;
        ?>
    </div>
</section>
<?php
$post_id = get_the_ID();
?>
<section class="productions">
    <div class="productions__container main-container <?php if ( wp_is_mobile() ) { echo 'swiper-container'; };?>">
        <?php
        $counter = 1;
        if( have_rows('production_list',$post_id) ):
            if ( wp_is_mobile() ) { echo '<div class="productions__list swiper-wrapper">'; }
            else {
                echo '<div class="productions__list">';
            };

            while( have_rows('production_list',$post_id) ) : the_row();
                $image = get_sub_field('image');
                $lnk = get_sub_field('page_link');
                $title = get_sub_field('title');
                ?>
                <?php
                    if ($lnk){
                        ?>
                            <a href="<?php echo $lnk;?>" class="productions__item <?php if ( wp_is_mobile() ) { echo 'swiper-slide'; };?>" data-aos="fade-up" data-aos-delay="<?php echo $counter * 150; ?>">
                                <div class="productions__item-img">
                                    <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                                </div>
                                <div class="productions__item-title">
                                    <?php echo $title;?>
                                </div>
                            </a>
                        <?php
                    } else {
                        ?>
                            <div class="productions__item <?php if ( wp_is_mobile() ) { echo 'swiper-slide'; };?>" data-aos="fade-up" data-aos-delay="<?php echo $counter * 150; ?>">
                                <div class="productions__item-img">
                                    <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                                </div>
                                <div class="productions__item-title">
                                    <?php echo $title;?>
                                </div>
                            </div>
                        <?php
                    }
                ?>

            <?php
                $counter ++;
            endwhile;
            echo '</div>';
        endif;
        ?>
    </div>
</section>
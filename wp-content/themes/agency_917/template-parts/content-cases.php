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
                $image2 = get_sub_field('image_2');
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
                            <div class="cases__item-image">
                                <img src="<?php echo $image1;?>" alt="<?php echo $title;?>">
                            </div>
                            <?php
                                if ($image2) {
                                    ?>
                                        <div class="cases__item-image">
                                            <img src="<?php echo $image2;?>" alt="<?php echo $title;?>">
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
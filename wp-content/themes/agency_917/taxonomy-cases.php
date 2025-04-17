<?php
/* Template Name: Works page */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <?php get_template_part( 'template-parts/content', 'pbanner' ); ?>
        <section class="types" data-aos="fade-up" data-aos-delay="100">
            <div class="types__container main-container">
                <h2 class="types__title">
                    <?php echo get_field('title_interest_block', 15)?>
                </h2>
                <div class="types__list">
                    <?php
                    $categories = get_terms( array( 'taxonomy' => 'cases' ) );
                    $term_query = new WP_Term_Query( array(
                        'taxonomy' => 'cases',
                        'orderby'                => 'term_order',
                        'order'                  => 'ASC',
                        'child_of'               => 0,
                        'parent'                 => 0,
                        'fields'                 => 'all',
                        'hide_empty'             => true,
                    ) );
                    foreach ($term_query->terms as $category){
                        ?>
                        <a class="types__list-item <?php if ($category->term_id == get_queried_object()->term_id) { echo 'current' ; }?>" href='<?php echo get_term_link( $category ); ?>'><?php echo $category->name?></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="interest">
            <div class="interest__container main-container">
                <div class="interest__list">
                    <?php
                    $term = get_queried_object();

                    $args = array(
                        'post_type'   => 'works',
                        'order'       => 'ASC',
                        'orderby'     => 'menu_order',
                        'cases' => $term->name
                    );
                    $query = new WP_Query( $args );
                    $counter = 1;
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $postpers_id = get_the_ID();
                            ?>
                            <div class="interest__item" data-aos="fade-up" data-aos-delay="<?php echo $counter * 150; ?>">
                                <div class="interest__item-main">
                                    <div class="interest__item-img <?php if (get_field('video_fiile', $postpers_id)){ echo 'has-video';}?>" <?php if (get_field('video_fiile', $postpers_id)){ echo 'data-video="' . get_field('video_fiile', $postpers_id) . '"';}?>>
                                        <img src="<?php echo get_field('image_for_page')?>">
                                        <?php
                                        if (get_field('video_fiile', $postpers_id)){
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
                                    <div class="interest__item-content">
                                        <div class="interest__item-title section-title">
                                            <?php echo get_field('title_for_pafe')?>
                                        </div>
                                        <div class="interest__item-desc full__text">
                                            <?php echo get_field('description_for_page')?>
                                        </div>
                                        <?php
                                        if( have_rows('portfolio_list' , $postpers_id )):
                                            ?>
                                            <div class="interest__item-btn pbanner__btn button button-white">
                                                <span>Detailes</span>
                                                <svg width="21" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1L10.5 10L20 1" stroke="black" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="interest__gallery swiper-container" style="display: none">
                                    <div class="interest__gallery-list swiper-wrapper">
                                        <?php
                                        if( have_rows('portfolio_list' , $postpers_id )):
                                            while( have_rows('portfolio_list' , $postpers_id ) ) : the_row();
                                                $img = get_sub_field('image_for_item');
                                                $video = get_sub_field('video_for_item');
                                                if ($video){
                                                    ?>
                                                    <div class="swiper-slide interest__gallery-item swiper-slide has-video" data-video="<?php echo $video; ?>">
                                                        <img src="<?php echo $img; ?>">
                                                        <div class="interest__gallery-play">
                                                            <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="27.5" cy="27.5" r="27" stroke="white"/>
                                                                <path d="M36 27.5L23.25 34.8612L23.25 20.1388L36 27.5Z" fill="white"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="swiper-slide interest__gallery-item">
                                                        <img src="<?php echo $img; ?>">
                                                    </div>
                                                    <?php
                                                }
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $counter ++;
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
<!--        --><?php //get_template_part( 'template-parts/content', 'tvideo' ); ?>
    </main>

<?php
get_footer();
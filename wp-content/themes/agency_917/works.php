<?php
/* Template Name: Works page */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <?php get_template_part( 'template-parts/content', 'pbanner' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'tvideo' ); ?>
    </main>

<?php
get_footer();





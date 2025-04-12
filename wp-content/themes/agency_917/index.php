<?php
/* Template Name: Main page */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'two' ); ?>
        <?php get_template_part( 'template-parts/content', 'productions' ); ?>
        <?php get_template_part( 'template-parts/content', 'two-col' ); ?>
        <?php get_template_part( 'template-parts/content', 'video' ); ?>
    </main>

<?php
get_footer();





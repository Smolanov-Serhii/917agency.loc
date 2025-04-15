<?php
/* Template Name: Portfolio page */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <?php get_template_part( 'template-parts/content', 'sbanner' ); ?>
        <?php get_template_part( 'template-parts/content', 'cases' ); ?>
        <?php get_template_part( 'template-parts/content', 'video' ); ?>
        <?php get_template_part( 'template-parts/content', 'full' ); ?>
        <?php get_template_part( 'template-parts/content', 'tvideo' ); ?>
        <?php get_template_part( 'template-parts/content', 'text' ); ?>
    </main>

<?php
get_footer();





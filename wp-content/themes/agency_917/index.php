<?php
/* Template Name: Main page */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
    </main>

<?php
get_footer();





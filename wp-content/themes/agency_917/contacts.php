<?php
/* Template Name: Contacts page */
$post_id = get_the_ID();
get_header();
?>

    <main class="main">
        <?php get_template_part( 'template-parts/content', 'cbanner' ); ?>
        <?php get_template_part( 'template-parts/content', 'contact-form' ); ?>
    </main>

<?php
get_footer();





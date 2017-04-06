<?php
/*
Template Name: Homepage
*/
?>

<?php get_header();?>
<?php get_template_part( 'template-parts/homepage/content', 'hero' ); ?>
<?php get_template_part( 'template-parts/homepage/content', 'about' ); ?>
<?php get_template_part( 'template-parts/homepage/content', 'services' ); ?>
<?php get_template_part( 'template-parts/homepage/content', 'testimonials' ); ?>
<?php get_template_part( 'template-parts/homepage/content', 'news' ); ?>
<?php get_template_part( 'template-parts/homepage/content', 'partners' ); ?>
<?php get_template_part( 'template-parts/homepage/content', 'portfolio' ); ?>

<?php get_footer();
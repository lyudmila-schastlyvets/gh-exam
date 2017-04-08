<?php
/**
 * Template part for displaying clients section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

?>

<section class="clients-section section">
    <div class="container">
        <?php if (get_theme_mod('clients_section_title')) : ?>
            <div class="section-header">
                <?php if (get_theme_mod('clients_section_title')) : ?>
                    <h2 class="section-title"><?php echo get_theme_mod('clients_section_title'); ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php
        $args = array(
            'post_type' => 'client',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order'   => 'ASC',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : ?>
            <div class="row clients-list">
                <?php  while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 single-client">
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
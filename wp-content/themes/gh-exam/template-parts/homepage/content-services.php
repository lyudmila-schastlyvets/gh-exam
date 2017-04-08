<?php
/**
 * Template part for displaying services section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

?>

<section class="section services-section-homepage">
    <div class="container">
        <?php if (get_theme_mod('services_section_title') || get_theme_mod('services_section_description') ) : ?>
            <div class="section-header">
                <?php if (get_theme_mod('services_section_title')) : ?>
                    <h2 class="section-title"><?php echo get_theme_mod('services_section_title'); ?></h2>
                <?php endif; ?>
                <?php if (get_theme_mod('services_section_description')) : ?>
                    <p class="section-description"><?php echo get_theme_mod('services_section_description'); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php
        $args = array(
            'post_type' => 'service',
            'posts_per_page' => 4
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : ?>
            <ul class="row features-list">
                <?php  while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="col-xs-12 col-sm-6 col-md-4 feature">
                        <div class="row">
                            <div class="service-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="service-content">
                                <h3 class="feature-title"><?php the_title();?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>

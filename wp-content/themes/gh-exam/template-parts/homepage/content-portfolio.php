<?php
/**
 * Template part for displaying portfolio section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

?>

<section class="section portfolio-section-homepage">
    <div class="container">
        <?php if (get_theme_mod('portfolio_section_title') || get_theme_mod('portfolio_section_description') ) : ?>
            <div class="section-header">
                <?php if (get_theme_mod('portfolio_section_title')) : ?>
                    <h2 class="section-title"><?php echo get_theme_mod('portfolio_section_title'); ?></h2>
                <?php endif; ?>
                <?php if (get_theme_mod('portfolio_section_description')) : ?>
                    <p class="section-subtitle"><?php echo get_theme_mod('portfolio_section_description'); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php
        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 6,

        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : ?>
            <div id="options">
                <div class="filter-group button-group filter-button-group">
                    <button class="filter filter-all active" data-filter="*">View all</button>
                    <button class="filter filter-websites" data-filter=".web-item">Websites</button>
                    <button class="filter filter-freebies" data-filter=".feebies-item">Freebies</button>
                </div>
            </div>
            <ul class="row portfolio-images" id="container">
                <?php  while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="col-xs-12 col-sm-6 col-md-4 portfolio-item">
                        <div class="portfolio-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="overlay">
                            <div class="overlay-border">
                                <div class="content">
                                    <h3 class="overlay-title"><?php ?></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>

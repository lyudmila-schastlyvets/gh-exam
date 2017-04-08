<?php
/**
 * Template part for displaying hero section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

?>
<section class="hero">
    <div class="container">
        <div class="row main-content">
            <div class="col-xs-12 col-md-6 hero-image">
                <?php if (get_theme_mod('hero_section_image')) : ?>
                    <img src="<?php echo get_theme_mod('hero_section_image'); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="col-xs-12 col-md-6 hero-content">
                <?php if (get_theme_mod('hero_title') || get_theme_mod('hero_subtitle') ) : ?>
                    <?php if (get_theme_mod('hero_title')) : ?>
                        <h2 class="main-site-title"><?php echo get_theme_mod('hero_title'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_theme_mod('hero_subtitle')) : ?>
                        <p class="main-section-subtitle"><?php echo get_theme_mod('hero_subtitle'); ?></p>
                    <?php endif; ?>
                    <?php if (get_theme_mod('hero_elements')) : ?>
                        <p class="main-section-taglines"><?php echo get_theme_mod('hero_elements'); ?></p>
                    <?php endif; ?>
                    <?php if (get_theme_mod('hero_section_info')) : ?>
                        <p class="main-section-info"><?php echo get_theme_mod('hero_section_info'); ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <a href="#contact-us-section" class="cta-btn"><i class="fa fa-angle-down" aria-hidden="true"></i></a>


    </div>
</section>

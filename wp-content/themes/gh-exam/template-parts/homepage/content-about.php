<?php
/**
 * Template part for displaying about us section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

?>

<section id="contact-us-section" class="section about-us-section-homepage">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-5 about-image">
                <?php if (get_theme_mod('about_us_section_image')) : ?>
                    <img src="<?php echo get_theme_mod('about_us_section_image'); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="col-xs-12 col-md-7 about-us-section-content">
                <?php if (get_theme_mod('about_us_section_title')) : ?>
                    <h2 class="about-us-title"><?php echo get_theme_mod('about_us_section_title'); ?></h2>
                <?php endif; ?>
                <?php if (get_theme_mod('about_us_section_info')) : ?>
                    <p class="about-content"><?php echo get_theme_mod('about_us_section_info'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

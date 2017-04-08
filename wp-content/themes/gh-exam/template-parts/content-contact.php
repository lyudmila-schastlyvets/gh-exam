<?php
/**
 * Template part for displaying contact us section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package businessplus
 */

?>

<section class="section contact-us-section">
    <div class="container">
        <div class="row">
            <?php if (get_theme_mod('contact_section_title') || get_theme_mod('contact_section_subtitle') ) : ?>
                <div class="section-header col-xs-12 col-md-6">
                    <?php if (get_theme_mod('contact_section_title')) : ?>
                        <h2 class="section-title"><?php echo get_theme_mod('contact_section_title'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_theme_mod('contact_section_subtitle')) : ?>
                        <p class="section-subtitle"><?php echo get_theme_mod('contact_section_subtitle'); ?></p>
                    <?php endif; ?>
                    <?php if (get_theme_mod('contact_section_phone')) : ?>
                        <p class="site-phone-number"><i class="fa fa-phone fa-rotate-270" aria-hidden="true"></i><?php echo get_theme_mod('contact_section_phone'); ?></p>
                    <?php endif; ?>
                    <?php if (get_theme_mod('contact_section_address')) : ?>
                        <p class="site-phone-address"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo get_theme_mod('contact_section_address'); ?></p>
                    <?php endif; ?>
                    <?php dynamic_sidebar('sidebar-3'); ?>
                </div>
            <?php endif; ?>
            <div class="content col-xs-12 col-md-6">
                <?php dynamic_sidebar('sidebar-2');?>
            </div>
        </div>
    </div>
</section>

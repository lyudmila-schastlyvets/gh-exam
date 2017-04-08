<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-exam
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_template_part( 'template-parts/content', 'client' );?>
		<?php get_template_part( 'template-parts/content', 'contact' );?>
		<section class="footer-logo-section">
			<div class="container">
				<h2 class="site-title"><?php the_custom_logo('custom-logo'); ?></h2>
			</div>
		</section>
		<section class="copyright-section">
			<div class="container">
				<?php if (get_theme_mod('copyright') != '' || get_theme_mod('copyright_date') != '') : ?>
					<span class="copyright">&copy;<?php echo get_theme_mod('copyright_date');?> <?php echo get_theme_mod('copyright');?></span>
				<?php endif ?>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<section class="header-section"><div class="container"><h2 class="page-title"><?php the_field('main-idea', get_option('page_for_posts')); ?></h2></div></section>
		<section class="post-section">
		<div class="container">
			<div class="">
				<main id="main" class="row site-main col-lg-8" role="main">


			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile; ?>

				<?php if (function_exists("custom_numeric_posts_nav")) :
					custom_numeric_posts_nav();
				endif; ?> <!-- Pagination -->

			<?php else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
				</main><!-- #main -->
				<aside class="sidebar-blog col-lg-4">
					<?php
					dynamic_sidebar('sidebar-4');
					dynamic_sidebar('sidebar-5');
					dynamic_sidebar('sidebar-6');?>

				</aside>
			</div>
		</div>
		</section>
	</div><!-- #primary -->

<?php
get_footer();

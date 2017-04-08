<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-md-6'); ?>>
    <div class="single-article">
        <div class="post-image">
            <?php
            if ( has_post_thumbnail() ) {
                echo '<a href="' . esc_url( get_permalink() ) . '">' . get_the_post_thumbnail() . '</a>';
            }
            else {
                echo '<a href="' . esc_url( get_permalink() ) . '" class="standart-background"></a>';
            }
            ?>
        </div>
        <div class="post-info">
            <?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
            <?php the_excerpt(); ?>
        </div>
        <div class="post-date">
            <?php gh_exam_posted_on(); ?>
        </div>

    </div>

    <div class="entry-content">
        <?php
        the_content( sprintf(
        /* translators: %s: Name of current post. */
            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'gh-exam' ), array( 'span' => array( 'class' => array() ) ) ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gh-exam' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php gh_exam_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->

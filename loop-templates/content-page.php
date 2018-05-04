<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

        <?php $hidetitle = ( '1' == get_theme_mod( 'hide_page_title' ) ) ? ' hide' : '' ?>
        <?php the_title( '<h2 class="entry-title' . "$hidetitle" . '">', '</h2>' ); ?>

	</header><!-- .entry-header -->

    <?php $hidepostimage = ( '1' == get_theme_mod( 'hide_post_image' ) ) ? ' hide' : '' ?>
    <div class="post-image <?php echo $hidepostimage; ?>">
     <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> 
	</div>
	<div class="entry-content">

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

        <?php $hidetitle = ( '1' == get_theme_mod( 'hide_page_title' ) ) ? ' hide' : '' ?>
        <?php the_title( '<h2 class="entry-title' . "$hidetitle" . '">', '</h2>' ); ?>

		<div class="entry-meta hide">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
    <?php $hidepostimage = ( '1' == get_theme_mod( 'hide_post_image' ) ) ? ' hide' : '' ?>
    <?php if (get_post_thumbnail_id() ) { ?>
    <div class="post-image <?php echo $hidepostimage; ?>">
    <?php 
        // display the post image
        the_post_thumbnail($post->ID, 'large'); 
        // check if the image has a caption, if so, display it
        if (has_excerpt( get_post_thumbnail_id() )) {
            echo "<p class='image-caption'>".get_post(get_post_thumbnail_id())->post_excerpt."</p>";
        
        //check if image has description
        if ( strlen(get_post(get_post_thumbnail_id())->post_content) > ''){
            echo "<p class='image-description'>".$description = get_post(get_post_thumbnail_id())->post_content."</p>";
        }
        }
    ?>
    </div>
    <?php } ?>
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

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

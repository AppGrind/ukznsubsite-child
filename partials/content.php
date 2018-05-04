<?php
/**
 * @package understrap
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


       <?php echo get_the_post_thumbnail( $post->ID, 'large' );?>

		<div class="entry-article p-1 mb-2">

            <header class="entry-header">

                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                <?php if ( 'post' == get_post_type() ) : ?>

                    <div class="entry-meta">
                        <?php understrap_posted_on(); ?>
                    </div><!-- .entry-meta -->

                <?php endif; ?>

            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php
                the_excerpt();
                ?>

                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                    'after'  => '</div>',
                ) );
                ?>

            </div>
            <footer class="entry-footer mb-0">

                <?php if(understrap_entry_footer()) { (understrap_entry_footer());} ?>

            </footer><!-- .entry-footer -->
		</div><!-- .entry-content -->

    
</article><!-- #post-## -->
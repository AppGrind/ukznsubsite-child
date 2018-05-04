<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title result-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p><span class="search-post-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></span></p>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<span class="result-posted-on"><?php understrap_posted_on(); ?></span><?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->

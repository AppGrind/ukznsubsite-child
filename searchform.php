<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" class="widget">
        <h3 class="widget-title"><label for="s" class="assistive-text"><?php _e( 'Search', 'understrap' ); ?></label></h3>
		<div class="input-group">
			<input type="text" class="field form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" />
			<span class="input-group-btn">
                <button type="submit" id="searchsubmit" name="submit" class="btn btn-outline-secondary">
                    <i class="icon icon-magnifier"></i>
                </button>
			</span>
		</div>
	</form>


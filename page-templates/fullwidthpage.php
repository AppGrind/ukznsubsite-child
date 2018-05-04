<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>
<!-- Full width -->

<?php
if ( !is_front_page() ) {
    ?>
    <div class="page-title">
        <div class="row  middle-align-container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12  middle-align">
                            <h2><?php single_post_title(); ?></h2>
                        </div>
                        
                        <div class="col-lg-4 col-md-5 col-sm-12  middle-align">
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('
                            <p id="breadcrumbs">','</p>
                            ');
                            } else
                            { 
                                if (function_exists('ukzn_custom_breadcrumbs')) ukzn_custom_breadcrumbs(); 
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="primary">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :

                            comments_template();

                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
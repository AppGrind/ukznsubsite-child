<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>


<!--  Page Title & Breadcrumbs -->

<div class="page-title">
    <div class="row  middle-align-container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12  middle-align">
                        <h2><?php the_archive_title();?></h2>
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

<!--  main page content -->
<div id="main-page" class="row">

    <div class="container">

    <div class="row">
        <div  id="content" class="container">

            <div class="wrapper pt-0 col-lg-12 col-md-12 col-sm-12 " id="page-wrapper">
            <div id="primary" class="content-area">
            
                <main id="main" class="site-main <?php if ( is_archive() ) { single_cat_title('',true); echo "-category" ;} ?>  <?php if ( is_archive() ){echo "archive-page";} ?>" role="main">
                    <div class="row">
                        <?php if ( have_posts() ) : ?>

                            <?php /* Start the Loop */
                            $sidebar_active = is_active_sidebar( 'sidebar-1' );
                            ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="col-lg-12 col-md-12 col-sm-12">

                                <?php
                                    /* Include the Post-Format-specific template for the content.
                                    * If you want to override this in a child theme, then include a file
                                    * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                    */
                                    get_template_part( 'loop-templates/content', 'archive');
                                ?>

                                </div>
                            <?php endwhile; ?>

                                <?php the_posts_navigation(); ?>

                                <?php else : ?>

                                    <?php get_template_part( 'partials/content', 'none' ); ?>

                                <?php endif; ?>
                        </div>
                    </main><!-- #main -->
                
                </div><!-- #primary -->

            <?php get_sidebar(); ?>
            </div><!-- Wrapper end -->
        </div><!-- container (header) end -->
    </div>
</div>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header(); ?>

<!-- This one -->
<?php
if (!is_front_page() && !is_home()) {
    ?>
    <div class="page-title">
        <div class="row  middle-align-container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12  middle-align">
                            <h2><?php single_post_title(); ?></h2>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-12 text-right  middle-align">
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

<!--------- main page content page----------->
<div id="main-page" class="container">
    <div class="row">
        <!-- ******************* The Navbar Area ******************* -->
        <div class="col-lg-3 col-md-12 col-sm-12 mb-3" id="sub-nav">

            <nav class="navbar navbar-secondary ukznmnu" role="navigation" id="sub_menu" itemscope="itemscope"
                 itemtype="http://schema.org/SiteNavigationElement">

                <div class="navbar-header">
                    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                <p class="navbar-toggler navbar-brand hidden-sm-down"><i class="fa fa-map-o mr-2"></i> NAVIGATION</p>
                
                    <p class="navbar-toggler navbar-brand hidden-sm-up"  data-toggle="collapse"
                            data-target=".exSideNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false"
                            aria-label="Toggle navigation"><i class="fa fa-map-o mr-2"></i> NAVIGATION</p>

                </div>

                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'side-nav',
                        'container_class' => 'collapse navbar-toggleable-xs exSideNavbar',
                        'container_id' => 'submenu',
                        'menu_class' => 'nav nav-tabs nav-stacked col-xs-12 root',
                        'fallback_cb' => '',
                        'menu_id' => 'subsite-main-menu',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                ); ?>

            </nav><!-- .site-navigation -->

        </div>

            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-lg-6 col-md-8<?php else : ?>col-lg-9 col-md-12<?php endif; ?> col-sm-12 mb-3 content-area">

                 <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->

            </div><!-- #primary -->

            <?php get_sidebar(); ?>
    </div>
</div><!-- row (header) end --->

<?php get_footer(); ?>

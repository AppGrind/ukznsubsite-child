<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header(); ?>



    <!--------- main page content ----------->
    <div id="main-page" class="row">

<!--         <div class="container"> -->

            <!-- ******************* The Navbar Area ******************* -->

<!--             <div class="col-lg-3 col-sm-12" id="sub-nav">

                <nav class="navbar navbar-secondary ukznmnu" role="navigation" id="sub_menu" itemscope="itemscope"
                     itemtype="http://schema.org/SiteNavigationElement">

                    <div class="navbar-header"> -->
                    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
<!--                 <p class="navbar-toggler navbar-brand hidden-sm-down"><i class="fa fa-map-o mr-2"></i> NAVIGATION</p>
                
                    <p class="navbar-toggler navbar-brand hidden-sm-up"  data-toggle="collapse"
                            data-target=".exSideNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false"
                            aria-label="Toggle navigation"><i class="fa fa-map-o mr-2"></i> NAVIGATION</p>

                    </div> -->

                    <!-- The WordPress Menu goes here -->
                    <?php /** wp_nav_menu(
                        array(
                            'theme_location' => 'side-nav',
                            'container_class' => 'collapse navbar-toggleable-xs exSideNavbar',
                            'container_id' => 'submenu',
                            'menu_class' => 'nav nav-tabs nav-stacked col-xs-12 root',
                            'fallback_cb' => '',
                            'menu_id' => 'subsite-main-menu',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                    ); */?>

              <!--   </nav>.site-navigation -->

<!--             </div> -->

<div class="col-lg-12 col-sm-12">
    
    <div class="container">

        <div class="wrapper no-padding search-wrapper">
        
            <section id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
                
                <main id="main" class="site-main" role="main">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">

                        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'understrap' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        
                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'loop-templates/content', 'search' );
                        ?>

                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

                </main><!-- #main -->
                
            </section><!-- #primary -->

        </div><!-- .row -->
    
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

</div>
</div>
<?php get_footer(); ?>
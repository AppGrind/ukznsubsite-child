<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!--link href="http://cdn.ukzn.ac.za/css/ukzn.css" rel="stylesheet">
    <link href="http://cdn.ukzn.ac.za/css/theme.css" rel="stylesheet">
    <link href="http://cdn.ukzn.ac.za/css/font-awesome.css" rel="stylesheet"-->
    <link href="<?php echo get_template_directory_uri() ?>/css/ukzn.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    <!-- the top-most menu for the site -->
    <div class="row" id="top_menu_cont">

        <div class="container">

            <div id="top_menu">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target=".top-menu"
                        aria-controls="top-menu" aria-expanded="false" aria-label="Toggle navigation">&#9776;
                </button>

                <!-- top nav -->
                <div class="collapse navbar-toggleable-md top-menu" id="topmenu">
                    <?php get_sub_top_menu('top_nav.json', false, ""); ?>
                </div>

            </div>

            <div class="col-md-4 col-xs-9" id="social">

                <!-- social nav -->
                <?php get_sub_top_menu('social.json', true, ""); ?>
            </div>
        </div>

    </div>
        	<div class="row">
            <div class="container">
            	<div class="col-md-4 col-sm-12 col-lg-4 offset-md-8 offset-lg-8">
         
            	<div class="top-nav-search-form">
					<?php get_search_form(); ?>
            	</div>
            	</div>
            </div>
        	</div>

    <!-- the logo and sitename container for the site -->
    <div class="row" id="log_site_name">

        <div id="top_band" class="container">

            <div class="col-lg-5 col-xs-12 col-sm-5" id="logo"><a class="logo_a"
                                                                  href="<?php echo get_bloginfo('url'); ?>"><span><img
                                src="<?php echo get_template_directory_uri() ?>/css/images/ukzn-logo.jpg"
                                alt="UKZN Logo"/></span></a>
            </div>
            <div class="col-lg-7 col-xs-12 col-sm-7" id="site_name_cont">

                <?php if (is_active_sidebar('sitename')) {

                    dynamic_sidebar('sitename');

                }
                ?>
            </div>

        </div>

    </div>

    <nav class="default-menu-container navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
<!--            <div class="navbar-header">
                <button type="button" class="navbar-toggle hidden-sm-up" data-toggle="collapse" data-target="#defaultmenu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
<!--            </div>-->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
            echo '<!-- The WordPress Menu goes here -->';
            wp_nav_menu(
                array(
                    'theme_location' => 'main-nav',
                    'container_class' => 'collapse navbar-collapse navbar-toggleable-xs exCollapsingNavbar no-padding',
                    'container_id' => 'defaultmenu',
                    'menu_class' => 'nav navbar-nav no-padding root container',
                    'fallback_cb' => '',
                    'menu_id' => '',
                    'walker' => new wp_bootstrap_navwalker()
                )
            );
            ?>
        </div><!-- /.container -->
    </nav>

    <?php if (is_home() || is_front_page()) {
        echo '
        <!-- home page slide show -->
                <div id="slideshow" class="row">
                    '; //<div class="container"></div>

                    if (is_active_sidebar('homeslider')) {

                        dynamic_sidebar('homeslider');

                    }

        echo
            '
             
        </div>';

    } ?>




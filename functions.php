<?php

include(dirname( __FILE__ ) . '/inc/setup.php');
include(dirname( __FILE__ ) . '/inc/tgm-plugin.php');
include (dirname( __FILE__) . '/inc/theme-customizer.php');
include (dirname( __FILE__) . '/inc/front/head.php');
include (dirname( __FILE__) . '/inc/related-post-category.php');
include(dirname( __FILE__ ) . '/inc/widgets.php');

add_action( 'tgmpa_register', 'ukznsubsite_child_register_required_plugins' );
add_action( 'wp_enqueue_scripts', 'enqueue_child_main_style' );
add_action( 'customize_register', 'ukznsubsite_child_customize_register' );
add_action( 'wp_head', 'ukznsubsite_page_title');
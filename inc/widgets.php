<?php

    add_action( 'widgets_init', 'remove_parent_widget', 99 );
    function remove_parent_widget() {
        unregister_widget( 'Footer 1' );
    }
    



function ukzn_child_widgets_init() {
 
    register_sidebar( array(
        'name' =>__( 'Footer 4', 'ukzn_child'),
        'id' => 'footer4',
        'description' => __( 'Appears on the footer', 'ukzn_child' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    }
 
add_action( 'widgets_init', 'ukzn_child_widgets_init' );
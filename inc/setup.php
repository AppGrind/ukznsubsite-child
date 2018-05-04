<?php
/**
 * Created by PhpStorm.
 * User: Msomis
 * Date: 2018/01/02
 * Time: 3:37 PM
 */
function ukzn_customizer_controls() {
    wp_enqueue_script( 'customizer-controls', get_template_directory_uri() . '/js/customize-controls.js', array( 'jquery' ), '20170412', true );
}
add_action( 'customize_controls_enqueue_scripts', 'ukzn_customizer_controls' );

function enqueue_child_main_style(){
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/css/child.css', false);
    wp_enqueue_style('simple-line-icons', 'https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css', false);
}

function ukznsubsite_child_queue_custom_scripts() {
    wp_enqueue_script( 'customizer-controls', get_stylesheet_directory_uri() . '/js/dataTables.init.js', array( 'jquery' ), '20170412', true );
}
add_action( 'customize_controls_enqueue_scripts', 'ukzn_customizer_controls' );

function remove_parent_filters(){
    remove_filter('wp_trim_excerpt', 'all_excerpts_get_more_link');
}
add_action('after_setup_theme', 'remove_parent_filters');


//if ( ! function_exists( 'understrap_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function understrap_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published mr-2" datetime="%1$s">%2$s</time><i class="fa fa-pencil"></i> <time class="updated" datetime="%3$s">' . __( '%4$s', 'understrap' ) . '</time>';
        }

        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );

        $posted_on = sprintf(
            esc_html_x( '%s', 'post date', 'understrap' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on"><i class="fa fa-calendar-plus-o"></i> ' . $posted_on . '</span>';

    }
//endif;

//if ( ! function_exists( 'understrap_entry_footer' ) ) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function understrap_entry_footer() {
        // Hide category and tag text for pages.
        if ( 'post' == get_post_type() ) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list( __( ', ', 'understrap' ) );
            if ( $categories_list && understrap_categorized_blog() ) {
                printf( '<span class="cat-links mr-2"><i class="fa fa-folder-open-o"></i> ' . __( '%1$s', 'understrap' ) . '</span>', $categories_list );
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list( '', __( ', ', 'understrap' ) );
            if ( $tags_list ) {
                printf( '<span class="tags-links"><i class="fa fa-tags"></i> ' . __( '%1$s', 'understrap' ) . '</span>', $tags_list );
            }
        }

        if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
            echo '<span class="comments-link">';
            comments_popup_link( __( 'Leave a comment', 'understrap' ), __( '1 Comment', 'understrap' ), __( '% Comments', 'understrap' ) );
            echo '</span>';
        }

        edit_post_link(
            sprintf(
            /* translators: %s: Name of current post */
                esc_html__( 'Edit %s', 'understrap' ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
//endif;
/* Adds a custom read more link to all excerpts, manually or automatically generated */
function excerpts_get_more_link($post_excerpt) {
    return $post_excerpt;
}
add_filter('wp_trim_excerpt', 'excerpts_get_more_link');
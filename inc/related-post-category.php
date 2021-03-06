<?php

function related_post_category($post){
$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 0, // Number of related posts that will be shown.
        'ignore_sticky_posts'=>1
    );

    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {
        echo '<div id="related_posts"><h3><span>Related Posts</span></h3><div class=" owl-carousel carousel-col-4">';
        while( $my_query->have_posts() ) {
            $my_query->the_post();?>

            <div class="related-post">
                <div class="related-post-thumb">
                    <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                    <span class="related-post-date"><?php the_time('M j, Y') ?></span>
                </div>
                <p class="related-post-title"><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
            </div>
            <?php
        }
        echo '</ul></div>';
    }
}
//$post = $orig_post;
wp_reset_query();
} ?>
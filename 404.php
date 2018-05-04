<?php
/**
 * The template for displaying 404 pages (not found).
 * @package understrap
 */

get_header(); ?>
<div class="wrapper col-lg-12 col-sm-12" id="404-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
        
            <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">

                    <section class="error-404 not-found">
                        
                        <header class="page-header">

                            <h1 class="page-title  text-xl-center text-md-center text-sm-center"><?php _e( 'Oops! The page you are looking for could not be found.', 'understrap' ); ?></h1>
                        </header><!-- .page-header -->

                        <div class="page-content">
							<div class="row">
                            	<p class="text-xl-center text-md-center text-sm-center mb-3"><?php _e( 'Maybe the page was moved/deleted or maybe you had a typo. Please try searching for it instead.', 'understrap' ); ?></p>

                        		<div class="col-lg-8 offset-lg-2 col-sm-12"><?php get_search_form(); ?></div>
                            
                        	</div>
                        </div>
                    </section><!-- .error-404 -->

                </main><!-- #main -->
                
            </div><!-- #primary -->

        </div> <!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>

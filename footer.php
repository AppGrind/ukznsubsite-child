<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
 $the_theme = wp_get_theme();
?>


<div class="wrapper" id="wrapper-footer">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                
                <div class="widget-footer">
               
                        <div class="col-md-12 col-lg-3" id="pre_footer1">
                            
                            <?php if ( is_active_sidebar( 'pre_footer1' ) ) : ?>
                                <?php dynamic_sidebar( 'pre_footer1' ); ?>
                            <?php endif; ?>
                        
                        </div>
                        
                        <div class="col-md-12 col-lg-3" id="pre_footer2">
                            
                            <?php if ( is_active_sidebar( 'pre_footer2' ) ) : ?>
                                <?php dynamic_sidebar( 'pre_footer2' ); ?>
                            <?php endif; ?>
                        
                        </div>
                        
                        <div class="col-md-12 col-lg-3" id="pre_footer3">
                            
                            <?php if ( is_active_sidebar( 'pre_footer3' ) ) : ?>
                                <?php dynamic_sidebar( 'pre_footer3' ); ?>
                            <?php endif; ?>
                        
                        </div>
                        
                        <div class="col-md-12 col-lg-3" id="pre_footer4">
                            
                            <?php if ( is_active_sidebar( 'pre_footer4' ) ) : ?>
                                <?php dynamic_sidebar( 'pre_footer4' ); ?>
                            <?php endif; ?>
                        
                        </div>
                        
                </div> <!-- widget footer -->
                
            </div> <!-- col -->
            
        </div> <!-- row -->
        
    </div> <!-- container -->

    <div class="col-lg-12 no-padding" id="strapline">
        
        <h2>Inspiring Greatness</h2>
    
    </div>
	
     <div id="footer" class="col-lg-12">
    
        <div class="container no-padding">

            <div class="row">

                <div class="col-md-12 no-padding">

                    <footer  class="site-footer" role="contentinfo">

                        <div class="site-info">

							<div class="col-md-12 col-lg-3" id="footer1">
                            
                            <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
                                <?php dynamic_sidebar( 'footer1' ); ?>
                            <?php endif; ?>
                        
							</div>
							
							<div class="col-md-12 col-lg-3" id="footer2">
								
								<?php if ( is_active_sidebar( 'footer2' ) ) : ?>
									<?php dynamic_sidebar( 'footer2' ); ?>
								<?php endif; ?>
							
							</div>
							
							<div class="col-md-12 col-lg-3" id="footer3">
								
								<?php if ( is_active_sidebar( 'footer3' ) ) : ?>
									<?php dynamic_sidebar( 'footer3' ); ?>
								<?php endif; ?>
							
							</div>
							
							<div class="col-md-12 col-lg-3" id="footer4">
								
								<?php if ( is_active_sidebar( 'footer4' ) ) : ?>
									<?php dynamic_sidebar( 'footer4' ); ?>
								<?php endif; ?>
							
							</div>

                        </div><!-- .site-info -->

                    </footer><!-- real footer -->

                </div><!--col end -->

            </div><!-- row end -->

        </div><!-- container end -->
        
    </div>
    <div class="no-padding col-lg-12" id="sitemap">
		
        <div class="container">

				<!-- footer nav -->
				<?php get_sub_top_menu('footer_nav.json', false, "sm_menu"); ?>

            <p id="copyright">© University of KwaZulu-Natal: All Rights Reserved</p>
		
        </div>
	
    </div>

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

    <script>
        //centre the logo vertically based on the height of the container
        jQuery(function() {
            jQuery('#logo').css({
                'margin-top' : ((jQuery('#top_band').outerHeight()-jQuery('#logo').outerHeight())/2)
            });
            jQuery(".site_name").css({
                'margin-top' : ((jQuery('#top_band').outerHeight()-jQuery('.site_name').outerHeight())/2)
            });
        });
        
        jQuery('.level-0 [data-toggle=dropdown]').on('click', function(event) {
            //check if menu is open, then close if it is
            if(jQuery(this).parent('.level-0 > li').hasClass('open')){
                // Avoid following the href location when clicking
                event.preventDefault(); 
                // Avoid having the menu to close when clicking
                event.stopPropagation(); 
                jQuery(this).parent('.level-0 > li').removeClass('open');
            }
            else {
                // Avoid following the href location when clicking
                event.preventDefault(); 
                // Avoid having the menu to close when clicking
                event.stopPropagation(); 
                // If a menu is already open we close it
                //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
                // opening the one you clicked on
                jQuery(this).parent().addClass('open');
            }
            jQuery(this).next('ul').addClass('test');
        });

    </script>

   
</body>

</html>

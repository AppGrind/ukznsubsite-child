<?php
/**
 * Events List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is needed.
 *
 * This view contains the filters required to create an effective events list widget view.
 *
 * You can recreate an ENTIRELY new events list widget view by doing a template override,
 * and placing a list-widget.php file in a tribe-events/widgets/ directory
 * within your theme directory, which will override the /views/widgets/list-widget.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters (TO-DO)
 *
 * @version 4.1.1
 * @return string
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();
$events_label_plural_lowercase = tribe_get_event_label_plural_lowercase();

$posts = new ArrayIterator(tribe_get_list_widget_events());

// Check if any event posts are found.
if ( $posts ) : ?>
<div class="container">
    <div id="events_cont" class="col-md-12 no-padding">
        <?php
        $min = count($posts);
        if($min > 4) $min = 4; 
        // Setup the post data for each event.
        foreach ( new LimitIterator($posts,0,4) as $post ) :
            setup_postdata( $post );
            $sD = get_post_meta( get_the_ID(), '_EventStartDate' );
            $eD = get_post_meta( get_the_ID(), '_EventEndDate' );  
            $startDate = substr($sD[0],0,10);
            $endDate = substr($eD[0],0,10);
            ?>

                <div class="tribe-events-list-widget-events <?php tribe_events_event_classes() ?> col-lg-<?php echo (12 / $min) ;?> col-sm-12" id="event_item">
                    <!-- large date -->
                    <a href="<?php echo get_permalink(); ?>" style="text-decoration:none;">
                        <div class="col-lg-5 <?php 
                            if($startDate == $today ){
                                echo 'active';
                            } elseif($startDate < $today && $today <= $endDate) {
                                echo 'active';
                            }
                            ?>" id="event_date">
                            <span id="date_num">
                                <?php echo date("d",strtotime($sD[0])); ?>
                            </span>
                            <br><?php echo date("M",strtotime($eD[0])); ?>
                        </div>
                        <div class="col-lg-7" id="event_info">
                            <h3 id="event_h3">
                                <?php echo get_the_title(); ?>
                            </h3>
                            <p id="event_details">
                                <?php echo tribe_events_event_schedule_details(); ?>
                            </p>
                        </div>
                    </a>
                </div>
                <!--- end of item --->

                <?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>
        <?php
        endforeach;
        ?>
        <div class="clear"></div>
    </div>
</div>
<?php
// No events were found.
else : ?>
	<p><?php printf( esc_html__( 'There are no upcoming %s at this time.', 'the-events-calendar' ), $events_label_plural_lowercase ); ?></p>
<?php
endif;

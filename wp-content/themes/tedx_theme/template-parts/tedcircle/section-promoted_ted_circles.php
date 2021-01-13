<?php 
    $event = get_sub_field('ted_circle_reference');
    $text = get_sub_field('email_to');
    $title =get_sub_field('title');
?>

<section class="section--promoted-ted-circle max-width-5 mx-auto mt4">
    <div class="section__ted-circle-container center">
       <div class="section__ted-circle-event-thumbnail">
           <a href="<?php echo get_the_permalink($event->ID); ?>"><img class="contain-image max-width-1" src="<?php echo get_the_post_thumbnail_url($event->ID);?>" alt=""></a>
       </div> 
       <div class="section__ted-circle-event-information">
            <a href="<?php echo get_the_permalink($event->ID); ?>"><h1 class="section__ted-circle-title pt3"><?php echo $title; ?></h1></a>
            <h3 class="section__ted-circle-event-title pt2 m0 p0"><?php echo get_the_title($event->ID); ?></h3>
            <h3 class="section__ted-circle-event-date m0 p0"><?php echo get_field('event_datetime_from', $event->ID); ?></h3>
            <h3 class="section__ted-circle-event-subscription m0 p0"><?php echo $text; ?></h3>
       </div>
    </div>
</section>
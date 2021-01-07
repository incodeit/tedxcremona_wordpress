<?php
  $event = get_sub_field('promoted_events_reference');
  if($event):?>
<section class="section section--promoted-events">
  <div class="container section__container">
    <div class="clearfix">
      <div class="event-carousel mb4">
          <?php foreach( $event as $post ): 
            setup_postdata($post); ?>
            <div class="carousel-item mx-auto px2 ">
              <?php get_template_part('template-parts/preview', 'event'); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
    <?php wp_reset_postdata(); ?>
</section>
<?php endif ?>


<?php
  $event = get_sub_field('promoted_events_reference');
  if($event):?>
<section class="section section--promoted-events">
  <div class="container section__container">
    <div class="clearfix">
      <div class="event-carousel flex flex-wrap justify-center md-mb4">
          <?php foreach( $event as $post ):
            setup_postdata($post); ?>
              <?php get_template_part('template-parts/preview', 'event'); ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
    <?php wp_reset_postdata(); ?>
</section>
<div class="section__line"></div>
<?php endif ?>

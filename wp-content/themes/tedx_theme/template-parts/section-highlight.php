<?php
  $line = get_template_directory_uri() . '/assets/line.png';
  $highlight = get_sub_field('highlights_reference');
  if($highlight):
?>

<section class="section section--highlight">
  <div class="section__container m0 pt0 list-reset">
    <?php foreach( $highlight as $post ):
        setup_postdata($post); ?>
    <?php endforeach; ?>
  </div>
</section>
  <div class="clearfix section__event mb4">
    <div class=" container section__background col-12 mt4 mb4">
      <?php if( have_rows('preview_highlight') ): ?>
      <?php while( have_rows('preview_highlight') ): the_row();
          $event_title = get_sub_field('title');
          $event_description = get_sub_field('description');?>
          <div class="section__highlight col-11 sm-col-8 md-col-6 mx-auto max-width-3">
              <div class="preview__event-title center">
                  <h1><?php echo $event_title; ?></h1>
              </div>
              <div class="preview__event-description justify">
                <?php echo $event_description; ?>
              </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  <?php wp_reset_postdata(); ?>

<?php endif ?>

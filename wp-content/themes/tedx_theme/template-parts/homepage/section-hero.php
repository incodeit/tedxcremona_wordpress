<?php
  $line = get_template_directory_uri() . '/assets/line.png';
  $highlight = get_sub_field('highlights_reference');
  if($highlight):
?>

<div class="homepage--hero container mt4 mx-auto">
  <div class="clearfix">
    <div class="col col-12 sm-col-6 mb4">
      <div class="mx-auto">
        <?php get_template_part('template-parts/template','common-hero');?>
      </div>
    </div>
    <div class="col col-6  mx-auto">
      <div class=" ">
        <section class="section section--hero">
          <ul class="section__container m0 pt0 list-reset">
          <div>
          </div>
            <?php foreach( $highlight as $post ): 
                setup_postdata($post); ?>
                <div class="section__item  ">
                  <?php get_template_part('template-parts/preview', 'highlight'); ?>
                </div>
            <?php endforeach; ?>
          </ul>            
        </section>
      </div>
    </div>    
  </div>
  </div>
  <div class="clearfix section__event mb4">
    <div class=" container section__background col-12 mt3 mb4">
      <?php if( have_rows('preview_highlight') ): ?>
      <?php while( have_rows('preview_highlight') ): the_row();         
          $event_title = get_sub_field('title');
          $event_description = get_sub_field('description');?>        
          <div class="section__highlight col-11 sm-col-8 md-col-6 mx-auto">
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
  <div class="section__line" >
  <img class="line" src="<?php echo $line; ?>" alt="">
</div>

<?php endif ?>




<?php
  $highlight = get_sub_field('highlights_reference');
  $hero_image = get_sub_field('hero_image');
  if($highlight):
?>

<section class="section section--hero">
  <ul class="section__container m0 p0 list-reset">
    <?php echo responsive_image($hero_image,'contain-image'); ?>
    <?php foreach( $highlight as $post ): 
        setup_postdata($post); ?>
        <li class="section__item">
          <?php get_template_part('template-parts/preview', 'highlight'); ?>
        </li>
    <?php endforeach; ?>
  </ul>
    <?php wp_reset_postdata(); ?>
</section>
<?php endif ?>
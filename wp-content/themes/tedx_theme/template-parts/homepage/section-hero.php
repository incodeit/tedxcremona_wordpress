<?php
  $highlight = get_sub_field('highlights_reference');
  if($highlight):
?>

<section class="section section--hero">
  <ul class="section__container m0 pt0 list-reset">
  <?php include(locate_template('template-parts/template-section-hero.php')); ?>
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
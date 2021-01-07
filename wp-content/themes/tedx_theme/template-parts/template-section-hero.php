<?php
  $hero_image = get_sub_field('hero_image');
?>
<section class="section section--hero">
  <ul class="section__container m0 pt4 list-reset">
    <?php echo responsive_image($hero_image,'contain-image'); ?>
  </ul>
    <?php wp_reset_postdata(); ?>
</section>

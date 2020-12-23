<?php
  $image = get_sub_field('image');
  $title = get_sub_field('title');
  $abstract = get_sub_field('abstract');
  $background_image = get_sub_field('background_image');
  // $link = get_sub_field('link');
?>

<section class="section section--hero-about">
  <div class="section__container">
    <div class="section__image-wrapper"><?php echo responsive_image($image,'contain-image'); ?></div>

    <header class="section__header center p4 flex flex-column justify-between relative">
      <div class="section__background-image absolute cover mx-auto px3">
        <?php echo responsive_image($background_image,'contain-image') ?>
      </div>
    </header>
  </div>
</section>

<?php
  $hero_image = get_sub_field('hero_image');
  $hero_image_portrait = get_sub_field('image_portrait');
  $highlights_reference = get_sub_field('highlights_reference');
?>

<section class="section section--hero section--home-hero">
  <img class="contain-image image-desktop px4" src="<?php echo $hero_image['url'];?>" alt="" >
  <img class="contain-image image-mobile" src="<?php echo $hero_image_portrait['url'];?>" alt="" >
</section>

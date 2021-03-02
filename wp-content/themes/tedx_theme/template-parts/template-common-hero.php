<?php
  $hero_image = get_the_post_thumbnail_url();
?>
<section class="section section--hero section--common-hero max-width-2 mx-auto pt4 pb1">
  <ul class="section__container m0 p0 list-reset">
    <img class="contain-image" src="<?php echo $hero_image;?>" alt="Hero Image Logo">
  </ul>
</section>

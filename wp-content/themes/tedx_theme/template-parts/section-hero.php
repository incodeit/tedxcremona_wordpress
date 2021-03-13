
<?php
  $hero_image = get_the_post_thumbnail_url();
?>
<?php if (is_page_template('page-templates/homepage.php')):?>
    <section class="section section--hero section--home-hero max-width-2 mx-auto ">
      <ul class="section__container m0 p0 list-reset">
        <img class="contain-image" src="<?php echo $hero_image;?>" alt="Hero Image Logo" >
      </ul>
    </section>
  
<?php else:?>
  <section class="section section--hero section--common-hero max-width-2 mx-auto pt4 pb1">
    <div class="section__container m0 p0 list-reset">
      <img class="contain-image" src="<?php echo $hero_image;?>" alt="Hero Image Logo">
    </div>
  </section>
<?php endif;?>


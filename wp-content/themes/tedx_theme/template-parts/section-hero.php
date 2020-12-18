<section class="section section--hero">
  <?php
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $abstract = get_sub_field('abstract');
    $background_image = get_sub_field('background_image');
    $link = get_sub_field('link');
  ?>

  <div class="container">
    <div class="section__image">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>">
    </div>

    <header class="section__header">
      <h1 class="section__title"><?php echo $title; ?></h1>
      <div class="section__abstract">
        <?php echo $abstract; ?>
      </div>
      <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
      <img class="cover-image" data-src="" alt="">
    </header>
  </div>
</section>

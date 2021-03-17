<?php
  global $wp_query;
  $args = array(
    'post_type'=> 'person',
    'cat' => 13,
  );

  $posts = get_posts($args);
  ?>
  <section class="section section--team ">
  <div class="container max-width-5 mx-auto">

    <div class="section__team-container clearfix flex flex-wrap">
      <?php
      foreach ($posts as $post):?>
          <div class="col-12 sm-col-6 md-col-4 lg-col-3 px2 center-align">
            <?php get_template_part('template-parts/preview', 'people'); ?>
          </div><?php
      endforeach;
      wp_reset_postdata();
      ?>
    </div>
    </div>
  </section>
  <?php
?>

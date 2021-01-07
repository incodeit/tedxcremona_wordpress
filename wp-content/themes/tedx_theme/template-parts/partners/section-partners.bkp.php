<?php 
  global $wp_query;
  $args = array(
    'post_type'=> 'partner',
    'cat'=> '5,6,7'
  );
  $posts = get_posts($args);
  ?> 
  <?php 
    if($posts) {
      
    }
  ?>
  <section class="section section--team ">
    <div class="section__team-container clearfix mx-auto max-width-5 flex flex-wrap">
      <?php
      
      foreach ($posts as $post):?> 
          <div class="px2 center-align">
            <?php get_template_part('template-parts/preview-main', 'partner'); ?>
          </div><?php
      endforeach;
      wp_reset_postdata();
      ?> 
    </div>
  </section>
  <?php
?>


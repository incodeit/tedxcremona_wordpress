  <section class="section section--partners ">
    <div class="section__container clearfix mx-auto max-width-5 flex flex-wrap">
      <?php 
        while(have_rows('partner_list')): the_row();
        $description = get_sub_field('list_description');
        $cat_id = get_sub_field('partner_category')->term_id;
        global $wp_query;
        $args = array(
          'post_type'=> 'partner',
          'cat'=> $cat_id
        );
        $posts = get_posts($args);
        if($posts):
        ?>
          <div class="section__category-wrapper fluid mb4">
            <?php  
              if($description):?>
              <h2 class="section__description center"> <?php echo $description; ?></h2>
              <?php 
              endif;?>
              <ul class="section__list m0 p0">
                <?php 
                    foreach ($posts as $post):?> 
                      <li class="section__item list-reset px2 center-align ">
                        <?php get_template_part('template-parts/preview-main', 'partner'); ?>
                      </li><?php
                    endforeach;
                    wp_reset_postdata();
                    ?> 
              </ul>
          </div>
        <?php
        endif;
        endwhile;
       ?>
    </div>
  </section>


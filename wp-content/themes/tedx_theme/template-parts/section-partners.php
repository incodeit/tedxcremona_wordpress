  <section class="section section--partners ">
    <div class="section__container clearfix flex flex-wrap">
      <?php 
        while(have_rows('partner_list')): the_row();
        $description = get_sub_field('list_description');
        $cat_id = get_sub_field('partner_category')->term_id;
        global $wp_query;
        $args = array(
          'orderby' => 'title',
          'order' => 'ASC',
          'post_per_page' => -1,
          'post_type'=> 'partner',
          'cat'=> $cat_id,
          'numberposts'=> -1

        );
        $posts = get_posts($args);
        if($posts):
        ?>
        <?php  
              if($description):?>
              <div class="mx-auto">
                <p class="section__description left p2 mt4"> <?php echo $description; ?></p>
              </div>
              <?php 
              endif;?>
          <div class="section__category-wrapper fluid mb2 mx-auto">            
              <div class="section__list flex flex-wrap max-width-4 mx-auto m0  p0 justify-center ">
                <?php 
                    foreach ($posts as $post):?> 
                      <div class="section__item  mb4 px2 ">
                        <div class="">
                        <?php get_template_part('template-parts/preview', 'partner'); ?>
                        </div>
                    </div><?php
                    endforeach;
                    wp_reset_postdata();
                    ?> 
              </div>
          </div>
        <?php
        endif;
        endwhile;
       ?>
    </div>
  </section>


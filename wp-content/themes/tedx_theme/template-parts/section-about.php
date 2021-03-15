<section class="section section--about container px2 py0 md-py4">
    <div class="section__about-container clearfix">
      <?php if( have_rows('columns') ): ?>
              <?php while( have_rows('columns') ) : the_row();
                      $title = get_sub_field('title');
                      $abstract = get_sub_field('abstract');
                  ?>
                  <div class="section__about-wrapper row mx-auto md-px4">
                    <div class=" col-12 sm-col-4 right-align pr0 md-pr4">
                      <h3 class="section__title ">
                        <?php echo $title ?>
                      </h3>
                    </div>
                    <div class="col-12 sm-col-8
                    <?php if(is_page_template('page-templates/homepage.php')): ?> section__abstract-wrapper-home
                    <?php else: ?> section__abstract-wrapper
                    <?php endif;?> mt2 md-mt2 mx-auto mb4">
                      <div class="section__abstract"><?php echo $abstract ?></div>
                    </div>
                  </div>
                 <?php endwhile; ?>
          <?php endif; ?>
    </div>
</section>

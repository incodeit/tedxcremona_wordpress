<section class="section section--about container px2 py3 ">
    <div class="section__about-container   clearfix mx4">
      <?php if( have_rows('columns') ): ?>
              <?php while( have_rows('columns') ) : the_row(); 
                      $title = get_sub_field('title'); 
                      $abstract = get_sub_field('abstract');
                  ?>

                  <div class="section__about-wrapper row mx-auto ">
                    <div class=" col-12 sm-col-4 right-align pr4 pt3">
                      <h3 class="section__title ">
                        <?php echo $title ?>
                      </h3>
                    </div>
                    <div class=" col-12 sm-col-8 section__abstract-wrapper mt4 mx-auto ">
                      <div class="section__abstract"><?php echo $abstract ?></div>
                    </div>
                  </div>
                 <?php endwhile; ?>
          <?php endif; ?>

    </div>

</section>

<section class="section section--about container px2 py3">
    <div class="section__about-container  clearfix mx4">
      <?php if( have_rows('columns') ): ?>
              <?php while( have_rows('columns') ) : the_row(); 
                      $title = get_sub_field('title'); 
                      $abstract = get_sub_field('abstract');
                  ?>

                  <div class="section__about-wrapper sm-col sm-col-6 left p3">
                      <div class="section__title-wrapper pl2 pb">
                        <h1 class="section__title"> <?php echo $title ?> </h1>
                      </div>
                      <div class="section__abstract-wrapper pl2">
                        <div class="section__abstract"><?php echo $abstract ?></div>
                      </div>
                  </div>
              <?php endwhile; ?>
          <?php endif; ?>

    </div>

</section>
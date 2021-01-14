<?php if( have_rows('page_content') ): ?>
  <?php while( have_rows('page_content') ): the_row(); ?>
      <?php include(locate_template('template-parts/homepage/section-'.get_row_layout().'.php')); ?>
  <?php endwhile; ?>
  <?php include(locate_template('template-parts/template-common-newsletter.php')); ?>
<?php endif; ?>

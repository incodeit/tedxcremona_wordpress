<div class="section--hero section--ted-circle">
    <?php get_template_part('template-parts/template','common-hero');?>
</div>
<?php if( have_rows('page_content') ): ?>
    <?php while( have_rows('page_content') ): the_row(); ?>
      <?php include(locate_template('template-parts/tedcircle/section-'.get_row_layout().'.php')); ?>
  <?php endwhile; ?>
<?php endif; ?>
  
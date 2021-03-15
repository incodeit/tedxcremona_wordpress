<?php
  $logo = get_field('footer_logo', 'options');
  $site_info = get_field('footer_site_info', 'options');
  $site_copyright = get_field('footer_copyright','options');
?>

<footer class="footer footer--main relative">
  <div class="clearfix max-width-5 mx-auto">
    <div class="col col-12 md-col-6 px2 mb2 md-mb0">
      <?php if ($logo): ?>
        <?php  echo responsive_image($logo,'contain-image pb3 pt4');?>
      <?php endif; ?>
      <?php if ($site_info): ?>
        <div class="footer__info wysiwyg pt1"><?php echo $site_info ?></div>
      <?php endif; ?>
      <?php if ($site_copyright): ?>
        <div class="footer__info wysiwyg pt2"><?php echo $site_copyright ?></div>
      <?php endif ?>
    </div>
    <div class="footer__social-list col col-12 md-col-6 px2 mb2 md-mb0 md-pr4 right-align">
      <?php #wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'footer__menu')); ?>
      <?php get_template_part('template-parts/block', 'social'); ?>
    </div>
  </div>
</footer>

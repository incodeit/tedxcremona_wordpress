<?php
  $logo = get_field('logo_alt', 'options');
  $site_info = get_field('footer_site_info', 'options');
?>

<footer class="footer footer--main relative">
  <div class="clearfix max-width-5 mx-auto">
    <div class="col col-12 md-col-6 px2 mb2 md-mb0">
      <?php if ($logo): ?>
        <img class="footer__logo" src="<?php echo $logo ?>" alt="logo" title="logo" />
      <?php endif; ?>
      <?php if ($site_info): ?>
        <div class="footer__info wysiwyg"><?php echo $site_info ?></div>
      <?php endif; ?>
    </div>
    <div class="col col-12 md-col-6 px2 mb2 md-mb0">
      <?php wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'footer__menu')); ?>
      <?php get_template_part('template-parts/block', 'social'); ?>
    </div>
  </div>
</footer>

<?php if(have_rows('footer_social_list','option')): ?>
  <div class="block block--social-list">
    <p class="block__label m0"> <?php _e('Seguici sui social', 'tedxcremona')?> </p>
    <ul class="list-reset">
      <?php while(have_rows('footer_social_list','option')): the_row(); 
      $link = get_sub_field('link');
      $class = get_sub_field('icon_class');
      ?>
        <li class="block__item ml2">
          <a href="<?php echo $link['url'] ?>" alt="<?php echo $link['title'] ?>">
            <i class="fa <?php echo $class; ?>"></i>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
<?php endif; ?>
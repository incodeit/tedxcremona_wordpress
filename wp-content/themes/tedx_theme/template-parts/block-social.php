<?php if(have_rows('footer_social_list','option')): ?>
  <div class="block block--social-list  pb4">
    <p class="block__label m0  pb3 pt4"> <?php _e('Privacy Policy', 'tedxcremona')?> </p>
    <p class="block__label m0 "> <?php _e('SEGUICI SUI SOCIAL', 'tedxcremona')?> </p>
    <ul class="list-reset">
      <?php while(have_rows('footer_social_list','option')): the_row(); 
      $link = get_sub_field('link');
      $class = get_sub_field('icon_class');
      ?>
        <li class="block__item ml3 list-reset inline-block  ">
          <a href="<?php echo $link['url'] ?>" alt="<?php echo $link['title'] ?>">
            <i class="fab fa-<?php echo $class; ?>"></i>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
<?php endif; ?>
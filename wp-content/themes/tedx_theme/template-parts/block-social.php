<?php if(have_rows('footer_social_list','option')):?>
  <div class="block block--social-list pb2 md-pb4">

    <p class="block__label m0 pb1 pt0 md-pt4"> <a style="text-decoration: none; color: white;" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Privacy Policy' ) ) );?>"><?php _e('Privacy Policy', 'tedxcremona')?> </a> </p>
    <p class="block__label m0 pb2 md-pb3"> <a style="text-decoration: none; color: white;" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Cookie Policy' ) ) );?>"><?php _e('Cookie Policy', 'tedxcremona')?> </a> </p>

    <p class="block__label m0"><?php _e('SEGUICI SUI SOCIAL', 'tedxcremona')?> </p>
    <ul class="list-reset">
      <?php while(have_rows('footer_social_list','option')): the_row();
      $link = get_sub_field('link');
      $class = get_sub_field('icon_class');
      ?>
        <li class="block__item ml3 mr3 md-mr0 list-reset inline-block">
          <a target="_blank" href="<?php echo $link['url'] ?>" alt="<?php echo $link['title'] ?>">
            <i class="fab fa-<?php echo $class; ?>"></i>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
<?php endif; ?>

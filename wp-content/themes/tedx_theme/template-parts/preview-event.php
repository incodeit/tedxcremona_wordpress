<div class="preview preview--event col-12 md-col-4">
    <?php
        $title = get_the_title();
        $thumbnail_image = get_the_post_thumbnail_url();
        $date_from = get_field('event_datetime_from');
        $date_to = get_field('event_datetime_to');
        $text = get_the_content();
    ?>

    <div class="clearfix preview-background-color px2 mb3 md-mb0">
        <div class="">
          <a class="fluid" href="<?php echo get_the_permalink(); ?>">
            <img class="fluid" src="<?php echo $thumbnail_image; ?>" alt="">
          </a>
        </div>
        <div>
          <h1 class="preview__title">
            <a href="<?php echo get_the_permalink();?> ">
              <?php echo $title; ?>
            </a>
          </h1>
        </div>

        <div class="">
            <p><?php echo $text; ?></p>
        </div>

        <h5><?#php echo ("Dal ".$date_from." al ".$date_to); ?></h5>
    </div>
</div>

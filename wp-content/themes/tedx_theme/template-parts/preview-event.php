<div class="preview preview--event">
    <?php 
        $title = get_the_title();
        $thumbnail_image = get_the_post_thumbnail();
        $date_from = get_field('event_datetime_from');
        $date_to = get_field('event_datetime_to');
        $text = get_the_content();
    ?>
    
    <div class="clearfix preview-background-color">
            <div class="">
                <a href="<?php echo get_the_permalink(); ?>">
                    <?php echo $thumbnail_image; ?>
                </a>
            </div>
            <h1>
                <a href="<?php echo get_the_permalink();?> ">
                    <?php echo $title; ?>
                </a>
            </h1>
            <p><?php echo $text; ?></p>
            <h5><?php echo ("Dal ".$date_from." al ".$date_to); ?></h5>
    </div>
</div>

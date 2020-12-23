<section class="section section--promoted-events container px2 py3 center">
    <h1 class="section__section-title"><?php echo the_sub_field('section_title')?> </h1>
    <div class="section__event-container clearfix mxn2">
        <?php if( have_rows('events') ): ?>
            <?php while( have_rows('events') ) : the_row(); 
                    $image = get_sub_field('image'); 
                    $title = get_sub_field('title');
                    $abstract = get_sub_field('abstract');
                    $link = get_sub_field('link');
                ?>
                <div class="section__event-wrapper sm-col sm-col-4 ">
                    <div class="section__event-image "><a href="<?php echo $link ?>"><?php echo responsive_image($image,'contain-image'); ?></a></div>
                    <h1 class="section__title"> <?php echo $title ?> </h1>
                    <div class="section__abstract"><?php echo $abstract ?></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

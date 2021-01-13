<?php 
    $highlight = get_sub_field('highlights_reference');
?>
<div class="preview preview--highlight">
    <div class="clearfix preview-background-color">
            <?php if( have_rows('preview_highlight') ): ?>
                <?php while( have_rows('preview_highlight') ): the_row(); 
                    $title = get_sub_field('text_1');
                    $subtitle = get_sub_field('text_2');
                    $bg_image = get_sub_field('image');
                    $thumbnail = get_the_post_thumbnail();
                    ?>
                    <div class="pt3 pb4">
                        <div class="preview__wrap-text right-align pr4">
                            <div class="preview__title ">
                                <?php echo $title; ?>
                            </div>
                            <div class="preview__subtitle ">
                                <span class="subtitle__background"><?php echo $subtitle; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="preview__wrap preview__background ">
                        <img class="" src="<?php echo get_the_post_thumbnail_url();?>" alt="img">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
</div>
<?php

<?php
    $highlight = get_sub_field('highlights_reference');
?>

<div class="container mx-auto preview preview--highlight">
    <div class="flex flex-wrap">
            <?php if( have_rows('preview_highlight') ): ?>
                <?php while( have_rows('preview_highlight') ): the_row();
                    $title = get_sub_field('text_1');
                    $subtitle = get_sub_field('text_2');
                    $thumbnail = get_the_post_thumbnail();
                    ?>
                    <div class="">
                        <div class="preview__wrap-text left-align ">
                            <div class="preview__title ">
                                <?php echo $title; ?>
                            </div>
                            <div class="preview__subtitle left-align ">
                                <span class="subtitle__background"><?php echo $subtitle; ?></span>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
    </div>
</div>

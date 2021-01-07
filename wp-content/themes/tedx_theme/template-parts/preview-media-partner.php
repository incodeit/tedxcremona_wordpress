<div class="preview preview--partner ">
    <?php 
    if( have_rows('partner_reference') ):
        while( have_rows('partner_reference') ) : the_row();
        $category_name = get_sub_field('category_name');
        $thumbnail_image = get_the_post_thumbnail();
        ?>
        <div>
            <div class="block--partner">
                <a href="<?php echo get_the_permalink(); ?>">
                    <div>
                        <h1>
                            <?php echo $category_name; ?>
                        </h1>
                    </div>
                </a>
            </div>
        </div><?php 
        endwhile;
       echo $thumbnail_image;

    endif;
    
?>
</div>




<div class="preview preview--partner ">
    <?php 
    $thumbnail_image = get_the_post_thumbnail_url();
    if($thumbnail_image): ?>
        <img class="contain-image max-width-1 flex pt3" src="<?php echo $thumbnail_image; ?>" alt="">
    <?php endif;
?>
</div>




<div class="preview preview--partner ">
    <?php 
    $thumbnail_image = get_the_post_thumbnail_url();
    if($thumbnail_image): ?>
        <img class="contain-image" src="<?php echo $thumbnail_image; ?>" alt="">
    <?php endif;
?>
</div>




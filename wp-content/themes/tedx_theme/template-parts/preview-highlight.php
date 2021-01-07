<div class="preview preview--highlight">
<?php 
    $text1 = get_field('highlight_text1');
    $text2 = get_field('highlight_text2');
    $link = get_field('highlight_text2');
    $bg_color = get_field('highlight_background_color');
    $thumbnail_image = get_the_post_thumbnail();
    
?>

    <div class="clearfix preview-background-color mb4">
        <div class="col-12 center ">
            <div class="col col-6  preview-background col-right">
                <div class="col col-6  ">
                    <div class="title">
                         <?php echo $text1;?>
                    </div>
                    <div class="abstract">
                        <p><?php echo $text2;?></p>
                    </div>
                </div>
                <div class="col col-6 preview-background-image">
                    <?php print_r($thumbnail_image); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="preview preview--people ">
    <?php 
        $name = get_the_title();
        $profession = get_field('person_subtitle');;
        $thumbnail_image = get_the_post_thumbnail();
    ?>
    <div>
        <div class="block--person">
            <a href="<?php echo get_the_permalink(); ?>">
                <?php echo $thumbnail_image; ?>
                <h1 class="m0 pt2 pb0"><?php echo $name;?></h1>
                <h2 class="m0 pb3"><?php echo $profession;?></h2>
            </a>
        </div>
    </div>
</div>

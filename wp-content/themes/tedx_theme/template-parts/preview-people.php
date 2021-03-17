<div class="preview preview--people ">
    <?php
        $name = get_the_title();
        $profession = get_field('person_subtitle');;
        $thumbnail_image_url = get_the_post_thumbnail_url();
    ?>
    <div>
        <div class="block--person">
            <a class="block" href="<?php echo get_the_permalink(); ?>">
                <img class="fluid" src="<?php echo $thumbnail_image_url;?>" alt="">
                <h1 class="m0 pt2 pb0"><?php echo $name;?></h1>
                <h2 class="m0 pb3"><?php echo $profession;?></h2>
            </a>
        </div>
    </div>
</div>

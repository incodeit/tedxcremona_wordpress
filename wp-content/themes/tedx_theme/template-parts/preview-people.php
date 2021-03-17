<div class="preview preview--people ">
    <?php
        $name = get_the_title();
        $profession = get_field('person_subtitle');;
        $serious_image = get_field('pro_image');
        $funny_image = get_field('funny_image');
        $thumbnail_image_url = get_the_post_thumbnail_url();
    ?>
    <div>
        <div class="block--person">
            <a class="block" href="<?php echo get_the_permalink(); ?>">
                <img class="fluid" src="<?php echo $thumbnail_image_url;?>" alt="">
                <?php echo responsive_image($funny_image, 'contain_image'); ?>
                <h1 class="m0 pt2 pb0"><?php echo $name;?></h1>
                <h2 class="m0 pb3"><?php echo $profession;?></h2>
            </a>
        </div>
    </div>
</div>

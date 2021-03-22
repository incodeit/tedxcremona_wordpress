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
                <div class="image__container mt2">
                    <div class="image__serious">
                        <?php echo responsive_image($serious_image, 'contain_image fluid'); ?>
                    </div>
                    <a class="block" href="<?php echo get_the_permalink(); ?>">
                        <div class="image__funny">
                            <?php echo responsive_image($funny_image, 'contain_image fluid'); ?>
                        </div>                  
                    </a>
                    <div class="image__information">
                        <h1 class="name pt2 m0 pb1"><?php echo $name;?></h1>
                        <h2 class="profession p0 m0"><?php echo $profession;?></h2>
                    </div>                    
                </div>                       
        </div>
    </div>
</div>

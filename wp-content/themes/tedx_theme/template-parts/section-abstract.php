<?php 
    $title = get_sub_field('abstract_title'); 
    $text = get_sub_field('abstract_text'); 
?>
<section class="section section--abstract">
    <div class="section__container  m0 p2 pt4 pb4 max-width-5 mx-auto center">
        <div class="section__highlight col-11 sm-col-8 md-col-6 mx-auto max-width-3">
            <div class="preview__event-title center">
                <h1><?php echo $title; ?></h1>
            </div>
            <div class="preview__event-description justify">
            <?php echo $text; ?>
            </div>
        </div>   
    </div>
</section>

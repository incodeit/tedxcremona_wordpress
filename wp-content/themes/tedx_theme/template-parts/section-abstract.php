<?php 
    $title = get_sub_field('abstract_title'); 
    $text = get_sub_field('abstract_text'); 
?>
<section class="section section--abstract">
    <div class="section__container  m0 pb4 max-width-5 mx-auto center">
        <div class="section__highlight col-11 sm-col-8 md-col-6 mx-auto max-width-3">
            <div class="preview__event-title center pb2 mt0">
               <strong><h1 class="mt0"><?php echo $title; ?></h1></strong>
            </div>
            <div class="preview__event-description justify">
            <?php echo $text; ?>
            </div>
        </div>   
    </div>
</section>

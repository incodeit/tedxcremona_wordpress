<?php 
    $title = get_sub_field('abstract_title'); 
    $text = get_sub_field('abstract_text'); 
?>
<section class="section section--abstract">
    <div class="section__container  m0 p2 pt4 pb4 max-width-5 mx-auto center">
        <h1>
            <?php echo $title; ?>
        </h1>
        <p>
            <?php echo $text; ?>
        </p>
        
    </div>
</section>

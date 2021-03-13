<?php 
    if( have_rows('button_list') ): ?>
    <div class="container block--form-button mb4 max-width-5 mx-auto">
        <ul class="clearfix block__button-wrapper flex flex-wrap justify-center m0 p0"><?php
        while( have_rows('button_list') ) : the_row();
            $sub_value = get_sub_field('button');?>
            <li class="block__button-element mx3 mt4 pb2 pt2 list-reset">
                <a target="_blank" class="block__form-element px4 pt2 pb2 center" href="<?php echo $sub_value['url']; ?>"><?php echo $sub_value['title']; ?></a>
            </li>
            <?php
        endwhile;
        ?>
        </ul>
    </div>
    <?php 
        endif;
?>


<div class=" lg-col-6 md-col-6 sm-col-12 pt4 block__button-element mx4 pb2 pt2">
<form class='' action="<?php echo $sub_value['url']; ?>">
</form>
            
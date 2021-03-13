<?php
if( have_rows('page_content') ):
    while ( have_rows('page_content') ) : the_row();
        include(get_row_layout());
    endwhile;
endif; ?>

<?php
/**
 * Template Name: Homepage
 *
 *
 */

get_header(); ?>

<div class="content-area">
		<?php while (have_posts()): the_post();
			get_template_part('template-parts/content','homepage');
		endwhile; ?>
</div>

<?php get_footer();

<?php
/**
 * Template Name: Contact 
 *
 *
 */

get_header(); ?>

<div class="content-area">
	<div class="container">
		<?php while (have_posts()): the_post();
			get_template_part('template-parts/content','contacts');
		endwhile; ?>
	</div>
</div>

<?php get_footer();
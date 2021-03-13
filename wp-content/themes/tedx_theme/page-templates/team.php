<?php
/**
 * Template Name: Team
 *
 *
 */

get_header(); ?>

<div class="content-area">
		<?php while (have_posts()): the_post();
			get_template_part('template-parts/section','sections');
		endwhile; ?>
</div>

<?php get_footer();
<?php
/**
 * Template Name: Default
 *
 *
 */

get_header(); ?>

<div class="content-area">
	<div class="container max-width-4 mx-auto mt4 mb4">
		<?php while (have_posts()): the_post(); ?>
			<div class="">
				<?php echo the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer();
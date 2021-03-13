<?php
/**
 * Template Name: Policies
 *
 *
 */

get_header(); ?>

<div class="section__policies ">
	<div class="container max-width-4 mx-auto mt4 mb4">
		<?php while (have_posts()): the_post(); ?>
			<div class="mt4">
				<h2><?php echo the_title() ?></h2>
				<?php echo the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer();
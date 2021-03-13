<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*
 */

 	$date = get_the_date();
 	$image = get_post_thumbnail_id();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('max-width-5 mx-auto px2 md-px0 mb4'); ?>>
	<div class="flex flex-row mx-auto">
		<?php if ($image): ?>
			<div class="post__image"><?php echo print_image($image, 1920, '', 'contain-image max-width-2'); ?></div>
		<?php endif; ?>
		<header class="post__header ml2">
			<h1 class="post__title m0 py2"><?php the_title(); ?></h1>
			<div class="post__content wysiwyg"><?php the_content(); ?></div>
		</header>
	</div>
	
</article>

<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="post-details">
				<i class="fa fa-user"></i> <?php the_author() ?>
				<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
				<i class="fa fa-folder"></i> <?php the_category(', '); ?>
				<i class="fa fa-tags"></i> <?php the_tags(); ?>

				<div class="post-comments-badge">
					<a href="#"><i class="fa fa-comments"></i> <?php comments_number(); ?></a>
				</div>
				<!-- post-comments-badge -->

				<?php edit_post_link( 'Edit post', '<div><i class="fa fa-pencil"></i>', '</div>'  ); ?>
			</div><!-- end post-details -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<?php if ( has_post_thumbnail() ) { ?>
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php } ?>
	<!-- post-image -->
	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div>
	<!-- post-excerpt -->

</article><!-- #post-## -->

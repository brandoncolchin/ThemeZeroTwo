<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

?>
<div class="searchCard" id="post-<?php the_ID(); ?>">

	<?php
	if ( has_post_thumbnail() ) {
	    the_post_thumbnail();
	}
	else {
	    echo '<img src="/wp-content/uploads/2017/09/IDWLTDplaceholder800.jpg">';
	}
	?>

		<?php the_title( sprintf( '<h2 class="text-center no-margin entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<?php if ( 'product' == get_post_type() ) : ?>
			<div class="spotlightPrice">
				<?php
				$_product = wc_get_product( $post->ID );
				echo ($_product->get_price_html());
				?></div>
		<?php endif; ?>

</div><!-- #post-## -->

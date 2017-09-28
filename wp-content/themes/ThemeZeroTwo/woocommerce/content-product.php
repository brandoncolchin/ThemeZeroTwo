<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$post = get_post();
$title_image = get_the_post_thumbnail_url();
$post_link   = get_permalink();
$title=get_the_title();
$image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
global $product;
$overlay = "";
$spotlightImageClass = "";
$availability = $product->get_availability();
$button_text = "BUY NOW";
if ( $availability['availability'] == 'Out of stock') {
	$overlay = "<img class='overlay' src='/wp-content/uploads/2017/09/OutofStock.png' alt='outOfStock'>";
	$spotlightImageClass = "spotlightImageFaded";
	$button_text = "SEE MORE";
}
if ( ! $product->managing_stock() && ! $product->is_in_stock() ) {
	$overlay = "<img class='overlay' src='/wp-content/uploads/2017/09/OutofStock.png' alt='outOfStock'>";
	$spotlightImageClass = "spotlightImageFaded";
	$button_text = "SEE MORE";
}
?>
<div class="spotlightCard">
	<a href="<?php echo $post_link; ?>">
		<div class="spotlightTop">

			<img class="spotlightImage <?php echo $spotlightImageClass; ?>" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $image_alt; ?>">
			<?php echo $overlay; ?>
		</div>
	</a>
	<div class="spotlightBottom">
		<div class="spotlightTitle">
			<?php the_title(); ?>
		</div>
		<div class="spotlightPrice">
			<?php
			$_product = wc_get_product( $post->ID );
			echo ($_product->get_price_html());
			?></div>
			<a href="<?php echo $post_link; ?>">
				<button class="btn btn-danger"><?php echo $button_text ?></button>
			</a>
		</div>
	</div>

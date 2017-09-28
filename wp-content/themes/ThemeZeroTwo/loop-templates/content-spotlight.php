<?php

$thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

$loop = new WP_Query( array(  'posts_per_page' => 8,
'post_type' => 'product',
'orderby' => 'date' )
);
?>
<h1 class="headline">SPOTLIGHT</h1>
<div class="container-fluid spotlightContainer">

  <div class="spotlightRow">
    <?php
    while( $loop->have_posts() ) : $loop->the_post();
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
          echo "$".$_product->get_price();
          ?></div>
          <a href="<?php echo $post_link; ?>">
            <button class="btn btn-danger"><?php echo $button_text ?></button>
          </a>
        </div>
      </div>
      <?php
    endwhile; wp_reset_postdata();
    ?>
  </div>
</div>
<?php

?>

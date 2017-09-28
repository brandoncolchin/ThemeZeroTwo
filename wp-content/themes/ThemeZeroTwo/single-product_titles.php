<?php
get_header();
$thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$title_banner   = get_field('title_banner');
$title_category_array = get_field('title_category');
$category_count = count($title_category_array);
?>

<!-- ===FEATURE IMAGE=== -->
<img src="<?php echo $title_banner['url']; ?>" alt="">
  <h1 class="headline"><?php the_title(); ?></h1>
<?php

$categories  = "'";
foreach($title_category_array as $iteration => $value) {
  $category_slug = $value->slug;
  $categories .= $category_slug;
  if($category_count==($iteration+1)){
    $categories .= "'";
  }
  else {
    $categories .= ",";
  }
  $iteration++;
}

$loop = new WP_Query( array(  'posts_per_page' => -1,
                              'post_type' => 'product',
                              'orderby' => 'title',
                              'product_cat' => $categories
                               ) );
?>
<div class="titleRow">
<?php
while( $loop->have_posts() ) :
  $loop->the_post();
    wc_get_template_part( 'content', 'product' );
endwhile; wp_reset_postdata();
?>
</div>
<?php
get_footer();
?>

<?php
$loop = new WP_Query(array(
  'posts_per_page'	=> 3,
  'post_type'		=> 'any',
  'meta_key'		=> 'display_as_sticky',
  'meta_value'	=> 1
));
?>
<h1 class="headline">NEWS</h1>
<section id='stickySectionContainer' class="container-fluid">

  <div class="row" id="landingStickyRow">
    <?php
    if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
    $type = get_post_type();
    if($type=='post'){
      $image_url = get_the_post_thumbnail_url();
    }
    elseif ($type=='product') {
      $product_sticky_image = get_field('featured_product_sticky_image');
      if(!empty($product_sticky_image)){
        $image_url = $product_sticky_image['url'];
      }
      else { $image_url = get_permalink(); }
    }
    $image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    ?>
    <a href="<?php echo get_permalink(); ?>">
      <div class="blogCardLower col-xs-6 col-sm-4">
        <div class="row">
          <a href="<?php echo get_permalink(); ?>">
            <div class="blogImageContainer">
              <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
            </div>
          </a>
          <a href="<?php echo get_permalink(); ?>">
            <div class="innerBlogContainer">
              <h3 class="blogHeader text-left"><?php the_title(); ?></h3>
            </div>
          </a>
        </div>
      </div>
    </a>

  <?php endwhile; wp_reset_postdata(); ?>

<?php endif; ?>
</div>
</section>
<!-- End News Section -->
<?php
?>

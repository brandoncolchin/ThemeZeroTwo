<?php
/* Template Name: Titles Page */

get_header();

$thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

?>

<h1 class="headline">TITLES</h1>
<!-- === MAIN CONTENT === -->
<div class="container-fluid">
  <row id="primary">
    <div id="content" class="col-sm-12">
      <section class="main-content">

        <?php $loop = new WP_Query( array( 'post_type' => 'product_titles',
        'orderby'   => 'post_id',
        'order'     => 'ASC',
        'posts_per_page' => -1
      ) ) ?>

      <div class="title-row clearfix" id="ttRow">
        <?php while ( $loop->have_posts() ): $loop->the_post();
        $title_image = get_the_post_thumbnail_url();
        $post_link   = get_permalink();
        $title=get_the_title();
        $image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
        ?>

        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 outsideStickyContainer">
        <a href="<?php echo $post_link; ?>">
          <div class="card" >
            <img class="card-img-top" src="<?php echo $title_image; ?>" alt="<?php echo $image_alt; ?>">
            <div class="card-block">
              <h3 class="card-title blogHeader"><?php echo $title; ?></h3>
            </div>
          </div>
        </a>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>

    </section>
    <!-- end main-content -->
  </div>
  <!-- end col -->
</row>
<!-- end row -->
</div>
<!-- end container -->

<?php get_footer(); ?>

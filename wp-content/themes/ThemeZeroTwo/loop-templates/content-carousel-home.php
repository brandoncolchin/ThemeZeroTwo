<section class="hero-slider">
  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php $loop = new WP_Query( array( 'post_type' => 'carousel_home' ) ) ?>
        <?php $slideNum = 0; ?>
        <?php $active = ""; ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); $slideNum++; ?>
          <?php if($slideNum==1){ $active .= "active"; }
          else { $active = ""; }    ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $slideNum; ?>" class="<?php echo $active; ?>"></li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php $loop = new WP_Query( array( 'post_type' => 'carousel_home', 'orderby' => 'date', 'order' => 'DESC' ) ) ?>
        <?php $slideNum = 0; ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); $slideNum++; ?>
          <div class="item<?php if( $slideNum==1 ) { echo " active"; } ?>">
            <?php if( has_post_thumbnail() ) { ?>
              <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($loop->ID)); ?>" alt="<?php  ?>">
            <?php } ?>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- end container -->
</section>
<!-- == END CAROUSEL -->

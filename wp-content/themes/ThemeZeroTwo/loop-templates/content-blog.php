<?php
/**
* Post rendering content according to caller of get_template_part.
*/
?>

<?php
if ( $newsPostCount!=0 ){ ?>
  <div class="blogPost blogCardLower col-xs-6 col-sm-4">
    <div class="row">
      <div class="blogImageContainer">
        <?php $thumbnail = get_the_post_thumbnail_url();
        if(empty($thumbnail)){ $thumbnail = "/wp-content/uploads/2017/09/IDWLTDplaceholder695.jpg"; } ?>
        <img src="<?php echo $thumbnail; ?>" alt="newsPostThumbnail">
      </div>
      <div class='innerBlogContainer'>
        <h3 class="blogHeader text-left"><?php the_title(); ?></h3>
        <p class="text-right blogReadMore">
        <a href="<?php echo get_permalink(); ?>" class="btn btn-danger">Read More</a>
      </div>
    </div>
  </div>
<?php }
else { ?>
  <div class="row">
    <div class="blogPost blogCardTop">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="blogImageContainer">
            <?php $thumbnail = get_the_post_thumbnail_url();
            if(empty($thumbnail)){ $thumbnail = ""; } ?>
            <img src="<?php echo $thumbnail; ?>" alt="newsPostThumbnail">
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class='innerBlogContainer'>
            <h2 class="blogHeader"><?php the_title(); ?></h2>
              <?php the_excerpt(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lowerBlogRow">
  <?php }	$newsPostCount++;	?>

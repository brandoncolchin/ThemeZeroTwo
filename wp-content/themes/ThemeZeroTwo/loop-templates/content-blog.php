<?php
/**
* Post rendering content according to caller of get_template_part.
*/
?>
<?php if ( $newsPostCount!=0 ){ ?>
<div class="newPieces">
  <div class="row">
    <div class="col-xs-6 col-md-6">
      <div class="newsImageContainer">
        <?php $thumbnail = get_the_post_thumbnail_url();
        if(empty($thumbnail)){ $thumbnail = ""; } ?>
        <img src="<?php echo $thumbnail; ?>" alt="newsPostThumbnail">
      </div>
    </div>
    <div class="col-xs-6 col-md-6">
      <div class='innerNewsContainer'>
        <h3 class="newsPieceHeader"><?php the_title(); ?></h3>
        <p>
          <?php the_excerpt(); ?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php else { echo "content-blog.php not working";?>

<?php } ?>

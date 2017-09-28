<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package understrap
*/

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>
<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>
<div class="wrapper" id="wrapper-index">
	<h1 class="headline" id="blogHeadline">NEWS</h1>
	<div class="container-fluid" id="content" tabindex="-1">
			<main class="site-main" id="main">
				<?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; ?>
				<?php $args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
				  'posts_per_page' => '7',
					'paged'			=> $paged,
				  'orderby'		=> 'date',
				  'order'			=> 'DESC',
				); ?>
				<?php $loop = new WP_Query( $args ); ?>
				<?php if ( $loop->have_posts() ) : ?>
					<?php $newsPostCount = 0; ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
						<?php endwhile; wp_reset_postdata(); ?>
					</div>

				<?php else : ?>
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>
				<?php endif; ?>
		</main><!-- #main -->
		<!-- The pagination component -->
		<?php understrap_pagination(); ?>

</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>

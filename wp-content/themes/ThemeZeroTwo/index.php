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

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php include(locate_template('loop-templates/content-blog.php')); ?>

					<?php endwhile; wp_reset_postdata(); ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php //understrap_pagination(); ?>
			<div id="loadMoreButton">
					<button class="btn btn-primary loadMore" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>"> Load More</button>
			</div>

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

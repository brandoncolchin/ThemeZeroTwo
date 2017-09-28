<?php
/**
* The header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package understrap
*/
$container = get_theme_mod( 'understrap_container_type' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond,js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src-"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src-"https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?> id="wholeSiteContainer">
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap-to-wordpress' ); ?></a>
		<!-- HEADER -->
		<header class="site-header" role="banner">
			<!-- Navbar -->
			<div class="navbar-wrapper">
				<div class="navbar navbar-inverse" role="navigation">
					<div class="container">
						<div class="navbar-collapse collapse" id="universal-header">
							<div class="row">
								<div class="col-xs-2">
									<a href="http://www.idwpublishing.com/">IDW Publishing</a>
								</div>
								<div class="col-xs-2">
									<a href="http://idwgames.com/">IDW Games</a>
								</div>
								<div class="col-xs-2">
									<a href="http://idwlimited.com/">IDW Limited</a>
								</div>
								<div class="col-xs-2">
									<a href="http://www2.idwentertainment.com/">IDW Entertainment</a>
								</div>
								<div class="col-xs-2">
									<a href="http://www.topshelfcomix.com/">Top Shelf</a>
								</div>
								<div class="col-xs-2">
									<a href="http://sdcomicartgallery.com/">SD Comic Art Gallery</a>
								</div>
							</div>
						</div>
						<div class="navbar-header" id="nav-icon3">
							<button type="button" name="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar1"></span>
								<span class="icon-bar2"></span>
								<span class="icon-bar3"></span>
								<span class="icon-bar4"></span>
							</button>
							<a href="/" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/IDW-Limited-logo-small.png" alt="IDW Limited Logo"></a>
						</div>

						<!-- navbar-header -->
						<nav class="navbar-collapse collapse">
							<?php
							wp_nav_menu(array(
								'theme_location'  => 'primary',
								'menu_class'			=> 'nav navbar-nav'
							));
							?>
							<script>
							$(document).ready(function(){
								$(".fa-search").click(function(){
									$(".searchContainer").toggleClass('showSearchBar');
									$(this).toggleClass('spin');
									$('.fa-times').toggleClass('spin');
								});

								$('#nav-icon3').click(function(){
									$(this).toggleClass('open');
								});
							});
							</script>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<div class="searchContainer">
										<?php get_search_form(); ?>
									</div>
								</li>
								<li id="search-nav">
									<i class="fa fa-2x fa-search" aria-hidden="true"></i>
								</li>
								<li id="times-nav">
									<i class="fa fa-2x fa-times" aria-hidden="true"></i>
								</li>
								<?php $count = WC()->cart->cart_contents_count;
								$total = WC()->cart->cart_calculate_totals; ?>
								<li id="cart-nav">
									<a href="/cart" title="View your shopping cart.">
										<i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i>
										<?php if ($count > 0) { ?>
										<span class="cartNum">
											<?php echo esc_html($count); ?>
										</span>
									<?php } ?>
									</a>
								</li>
							</ul>
						</nav>
						<!-- end nav -->
					</div>
					<!-- container -->
				</div>
				<!-- navbar -->
			</div>
			<!-- navbar-wrapper -->

		</header>
		<!-- === END HEADER === -->
		<div id="main-content">

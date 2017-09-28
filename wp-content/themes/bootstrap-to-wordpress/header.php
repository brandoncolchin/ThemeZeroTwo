<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Bootstrap_to_WordPress
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond,js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src-"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src-"https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap-to-wordpress' ); ?></a>

		<!-- HEADER -->
		<header class="site-header" role="banner">
			<!-- Navbar -->
			<div class="navbar-wrapper">
				<div class="navbar navbar-inverse" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" name="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="/" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/IDW-Limited-logo-small.png" alt="IDW Limited Logo"></a>
						</div>
						<!-- navbar-header -->
						<nav class="navbar-collapse collapse">


							<?php
							wp_nav_menu(array(
								'menu_location'  => 'primary',

								'menu_class'			=> 'nav navbar-nav'
							));
							?>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<form class="form-inline my-2 my-lg-0">
									<input class="form-control mr-sm-2" type="text" placeholder="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								</form>
							</li>
							<li id="cart-nav">
							<i class="fa fa-inverse fa-2x fa-shopping-cart" aria-hidden="true"></i>
						</li>
						</ul>

					</nav>

				</div>
				<!-- container -->
			</div>
			<!-- navbar -->
		</div>
		<!-- navbar-wrapper -->

	</header>
	<!-- === END HEADER === -->

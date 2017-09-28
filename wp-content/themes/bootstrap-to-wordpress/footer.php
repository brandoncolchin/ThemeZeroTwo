<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<?php wp_footer(); ?>

<!-- SIGN UP SECTION -->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
				<p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- signup -->

<!-- FOOTER -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/IDW-Limited-logo-small.png" alt="Bootstrap to Wordpress"></a></p>
			</div>
			<!-- end col -->
			<div class="col-sm-6">
				<nav>
					<ul class="list-unstyled list-inline">
						<li><a href="">Home</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Resources</a></li>
						<li><a href="">Contact</a></li>
						<li class="signup-link"><a href="">Sign up now</a></li>
					</ul>
				</nav>
			</div>
			<!-- end col -->
			<div class="col-sm-3">
				<p class="pull-right">&copy; 2014 Brandon Colchin</p>
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</footer>
<!-- END FOOTER -->

<!-- MODAL -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" name="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our mailing list.</h4>
			</div>
			<!-- modal-header -->
			<div class="modal-body">
				<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
				<form class="form-inline" role="form" action="index.html" method="post">
					<div class="form-group">
						<label class="sr-only" for="subscribe-name">Your first name</label>
						<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name" name="" value="">
					</div>
					<!-- form-group -->
					<div class="form-group">
						<label class="sr-only" for="subscribe-name">and your email</label>
						<input type="text" class="form-control" id="subscribe-email" placeholder="and your email" name="" value="">
					</div>
					<!-- form-group -->
					<input type="submit" class="btn btn-danger" name="" value="Subscribe!">
				</form>
				<hr>
				<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacu &amp; you may unsubscribe at any time.</small></p>
			</div>
			<!-- modal body -->
		</div>
		<!-- modal content -->
	</div>
	<!-- modal-dialog -->
</div>
<!-- modal -->

<!-- BOOTSTRAP CORE JAVASCRIPT
		Placed at the end of the document so the pages load faster!
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>

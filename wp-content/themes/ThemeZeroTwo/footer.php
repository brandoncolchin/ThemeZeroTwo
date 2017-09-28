<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after
*
* @package understrap
*/


?>

<?php wp_footer(); ?>

</div>
<!-- end of #main-content 1440px max-width div -->

<!-- end 1440px max-width div -->
<!-- === PARTNER FOOTER === -->
<section id="partner-footer">
	<div class="container-fluid partner-container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-4"><a href="http://www.idwpublishing.com/"><img class="partner-img" src="/wp-content/uploads/2017/09/idwpublishing.png" alt="idwpublishing"></a></div>
					<div class="col-xs-4"><a href="http://www.topshelfcomix.com/"><img class="partner-img" src="/wp-content/uploads/2017/09/topshelf.png" alt="topshelf"></a></div>
					<div class="col-xs-4"><a href="http://idwgames.com/"><img class="partner-img" src="/wp-content/uploads/2017/09/games.png" alt="IDWGames"></a></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-4"><a href="http://www2.idwentertainment.com/"><img class="partner-img" src="/wp-content/uploads/2017/09/idwe_logo_grey-1.jpg" alt="IDW Entertainment"></a></div>
					<div class="col-xs-4"><a href="http://sdcomicartgallery.com/"><img class="partner-img" src="/wp-content/uploads/2017/09/SDCAG.png" alt="SDCAG"></a></div>
					<div class="col-xs-4"><a href="http://idwmediaholdings.com/"><img class="partner-img" src="/wp-content/uploads/2017/09/media.png" alt="IDWMedia"></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ===END PARTNER FOOTER=== -->

<!-- FOOTER -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-2">
				<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/IDW-Limited-logo-small.png" alt="IDWLTD Logo"></a></p>
			</div>
			<!-- end col -->
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footer-left',
				'container_class' => 'col-xs-6 col-sm-2 footer-text',
				'menu_class'      => 'list-group list-unstyled',
			));
			wp_nav_menu(array(
				'theme_location' => 'footer-middle',
				'container_class' => 'col-xs-6 col-sm-2 footer-text',
				'menu_class'      => 'list-group list-unstyled',
			));
			wp_nav_menu(array(
				'theme_location' => 'footer-right',
				'container_class' => 'col-xs-6 col-sm-2 footer-text',
				'menu_class'      => 'list-group list-unstyled',
			));
			?>
			<!-- end col -->
			<div class="col-xs-12 col-sm-4">
				<p class="text-center">Copyright &copy; <?php echo date('Y'); ?> IDW Entertainment. All Rights Reserved.</p>
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
			<div class="modal-body" id="mc_embed_signup">
				<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
				<form class="form-inline validate" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
				role="form" action="//idwlimited.us1.list-manage.com/subscribe/post?u=5792cac24346d164eb0cf6ad2&amp;id=7b8c9ab595" method="post"
				target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<div class="form-group">
						<label class="sr-only" for="mce-EMAIL">Your email</label>
						<input type="email" class="form-control email" id="mce-EMAIL" placeholder="BruceBanner@example.com" name="EMAIL" value="" required>
					</div>
					<!-- form-group -->
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5792cac24346d164eb0cf6ad2_7b8c9ab595" tabindex="-1" value=""></div>
					<input type="submit" id="mc-embedded-subscribe" class="btn btn-danger clear" name="subscribe" value="Subscribe!">
				</div>
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
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>

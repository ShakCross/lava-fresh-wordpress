<footer class="offset-top0">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-3">
					<a class="logo-footer" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header-white.png" alt="Logo" class="img-responsive"></a>
				</div>
				<div class="col-sm-8 col-md-9">
					<div class="row footer-separator">
						<div class="col-sm-6 col-md-7 col-lg-9">
							<!-- promo  -->
							<div class="promo-footer">
								<span class="text-1">Comience a lavar hoy!</span>
								<span class="text-2">+51 969-713-523</span>
							</div>
							<!-- /promo -->
						</div>
						<div class="col-sm-6 col-md-5 col-lg-3">
							<!-- social-icon -->
							<ul class="social-icon-footer">
								<li>
									<a href="#" class="icon-facebook-logo"></a>
								</li>
								<li>
									<a href="#" class="icon-instagram-social-network-logo-of-photo-camera"></a>
								</li>
							</ul>
							<!-- /social-icon -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row row-flex">
				<div class="col-xs-12 col-sm-3 col-lg-3 col1">
					<!-- box-location -->
					<div class="box-location">
						Contáctenos por Whatsapp
					</div>
					<!-- /box-location -->
					<!-- box-mail -->
					<div class="box-email">
						<a href="mailto:noreply@envato.com">mail@lavafresh.com</a>
					</div>
					<!-- /box-mail -->
				</div>
				<div class="col-xs-12 col-sm-4 col-lg-4 col2">
					<!-- time-table -->
					<div class="time-table">
						Lun-Sab: 9:00am-8:00pm
						<br>Dom: 9:00am-1:00pm
					</div>
					<!-- /time-table -->
				</div>
				<div class="col-xs-12 col-sm-3 col-lg-3 col3">
					<!-- copyright-box -->
					<div class="copyright-box">
						&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> <br> Todos los Derechos Reservados.
					</div>
					<!-- /copyright-box -->
				</div>
				<div class="col-md-2 col4">
					<!-- footer-link -->
					<ul class="footer-link">
						<li><a href="#">Términos y Condiciones</a></li>
						<!-- <li><a href="#">Privacy Policy</a></li> -->
					</ul>
					<!-- /footer-link -->
				</div>
			</div>
		</div>
		<div class="bubbleContainer"></div>
		<div class="backToTop js-backToTop">
			<i class="icon icon-right-arrow"></i>
		</div>
</footer>
<script type="text/javascript">
		jQuery(document).ready(function() {
			// Revolution Slider
			jQuery('.tp-banner').show().revolution({
				sliderType: "standard",
				sliderLayout: "fullwidth",
				dottedOverlay: "none",
				delay: 6000,
				navigation: {
					keyboardNavigation: "off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation: "off",
					mouseScrollReverse: "default",
					onHoverStop: "off",
					touch: {
						touchenabled: "on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
						style: "uranus",
						enable: true,
						hide_onleave: true
					}
				},
				responsiveLevels: [1920, 1200, 992, 768],
				visibilityLevels: [1920, 1200, 992, 768],
				gridwidth: [1920, 1200, 992, 768],
				gridheight: [778, 486, 402, 300],
				lazyType: "single",
				shadow: 0,
				spinner: "off",
				stopLoop: "on",
				stopAfterLoops: 0,
				shuffle: "off",
				autoHeight: "off",
				fullScreenAutoWidth: "off",
				fullScreenAlignForce: "off",
				disableProgressBar: "on",
				hideThumbsOnMobile: "off",
				hideSliderAtLimit: 0,
				hideCaptionAtLimit: 0,
				hideAllCaptionAtLilmit: 0,
				debugMode: false
			});
		}); //ready
</script>
<?php wp_footer(); ?>
</body>
</html>

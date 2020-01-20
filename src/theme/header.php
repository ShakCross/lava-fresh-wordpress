<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="author" content="André Santa Cruz, and LavaFresh contributors" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBesw263ius7OmFcr2A9w4FO7uK5xhQbgY"></script>
</head>

<body <?php body_class(); ?>>

<div class="loader">
	<div class="loader-wrapper">
		<div class="bubble1"></div>
		<div class="bubble2"></div>
	</div>
</div>

<header class="no-border">
		<div class="page-header-mobile-info">
			<div class="page-header-mobile-info-content">
				<div class="page-header-info">
					<i class="icon icon-map-pointer"></i>Dirección, de LavaFresh
				</div>
				<div class="page-header-info">
					<i class="icon icon-telephone"></i>+1-800-123-45-67
				</div>
				<div class="page-header-info">
					<i class="icon icon-email"></i><a href="mailto:noreply@envato.com">noreply@envato.com</a>
				</div>
				<div class="page-header-info">
					<i class="icon icon-clock"></i>Lun.-Do. 7:00 AM to 7:00 PM
				</div>
			</div>
		</div>
		<div class="container">
			<a id="touch-menu" class="mobile-menu" href="#">
				<span class="icon-menu-button-of-three-horizontal-lines"></span>
			</a>
			<div class="page-header-mobile-info-toggle"></div>
			<div class="row">
				<div class="col-sm-12 visible-sm visible-xs">
					<!-- box-telephone -->
					<div class="box-telephone ">
						<address>
							<span class="icon icon-telephone"></span>1 (800) 123-45-67
						</address>
						<div class="time hidden-sm hidden-xs">Lun.-Do. 7:00 AM to 7:00 PM</div>
					</div>
					<!-- /box-telephone -->
				</div>
				<div class="col-sm-12 col-md-4 col-lg-3 hidden-sm hidden-xs">
					<!-- box-location -->
					<address class="box-location">
						Dirección, <br>de LavaFresh
					</address>
					<!-- /box-location -->
				</div>
				<div class="col-sm-12 col-md-4 col-lg-6 text-center">
					<!-- logo -->
					<a class="logo" title="Laundry & Dry Cleaning" href="index.html"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" alt="Laundry & Dry Cleaning"></a>
					<!-- /logo -->
				</div>
				<div class="col-sm-12 col-md-4 col-lg-3 hidden-sm hidden-xs">
					<!-- box-telephone -->
					<div class="box-telephone ">
						<address>
							1 (800) 123-45-67
						</address>
						<div class="time hidden-sm">Lun.-Do. 7:00 AM to 7:00 PM</div>
					</div>
					<!-- /box-telephone -->
				</div>
			</div>
		</div>
		<div class="box-nav">
			<div class="container">
				<div class="row">
					<div class="center">
						<nav class="top-menu">
						<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								?>
							<ul class="menu">

								<!-- <li class="active"><a href="index.html">Inicio</a></li>
								<li><a href="about.html">Nosotros</a></li>
								<li>
									<a href="services.html">Servicios</a><span class="arrow"></span>
									<ul>
										<li><a href="service-page-1.html">Laundry Service</a></li>
										<li><a href="service-page-2.html">Dry Cleaning</a></li>
										<li><a href="service-page-3.html">Leather & Suede Cleaning</a></li>
										<li><a href="service-page-4.html">Wedding Gown Cleaning & Preservation</a></li>
										<li><a href="service-page-5.html">Tailoring & Alterations</a></li>
										<li><a href="service-page-6.html">Pillow Refurbishing</a></li>
										<li><a href="service-page-7.html">Linen, Upholstery, & Area Rug Cleaning</a></li>
									</ul>
								</li>
								<li><a href="price.html">Precios</a></li>
								<li><a href="contact.html">Contáctanos</a></li>
								<li><a href="contact.html"></a></li> -->
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	

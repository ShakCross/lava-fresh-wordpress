<?php get_header(); ?>
<!-- container -->
<div class="container">
	<!-- site-content -->
	<div class="site-content">
		<article class="page">
			<h1 class="page-title"><?php _e( 'Oops! 404', 'lavafresh' ); ?></h1>
			<br>
			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'lavafresh' ); ?></p>

				<?php get_search_form(); ?>
			</div>
		</article>
	</div>
	<!-- /site-content -->
</div>
<!-- /container -->
<?php get_footer(); ?>

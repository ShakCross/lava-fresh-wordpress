<?php
/**
 *Template Name: Comenzar
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LavaFresh
 */
get_header();
?>

	<!-- breadcrumb -->
	<div class="breadcrumb">
		<div class="container">
			<div class="row">
				<ul>
					<li><a href="index.html">Inicio</a></li>
					<li>Lavandería</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /breadcrumb  -->
	<div class="page-content">
		<div class="container">
			<h2 class="title-underline">Que Desea Lavar Hoy?</h2>
			<div class="prices-filter">
				<a href="#" data-category="category1" class="price-filter color1 active">
					<div class="price-filter_icon">
						<icon class="icon-technology"></icon>
					</div>
					<div class="price-filter_text">Prendas</div>
				</a>
				<a href="#" data-category="category2" class="price-filter color2">
					<div class="price-filter_icon">
						<icon class="icon-hanger-with-clothes"></icon>
					</div>
					<div class="price-filter_text">Muebles</div>
				</a>
				<a href="#" data-category="category3" class="price-filter color3">
					<div class="price-filter_icon">
						<icon class="icon-electric-iron"></icon>
					</div>
					<div class="price-filter_text">Cama</div>
				</a>
			</div>
			<div class="prices-tabs">
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-2">ABRIGOS-CHOMPAS</a> </h4>
					</div>
					<div id="collapse1-2" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'abrigos-chompas',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-3">BATAS</a> </h4>
					</div>
					<div id="collapse1-3" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
                            <table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'batas',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-4">BLUSAS</a> </h4>
					</div>
					<div id="collapse1-4" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
                            <table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'blusas',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-5">CAMISAS-POLOS</a> </h4>
					</div>
					<div id="collapse1-5" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
                            <table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'camisas-polos',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-6">CASACAS</a> </h4>
					</div>
					<div id="collapse1-6" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
                            <table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'casacas',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-7">CONJUNTOS</a> </h4>
					</div>
					<div id="collapse1-7" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
                            <table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'conjuntos',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-8">ELEGANTES</a> </h4>
					</div>
					<div id="collapse1-8" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
                            <table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'elegantes',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-9">PANTALONES-SHORTS</a> </h4>
					</div>
					<div id="collapse1-9" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
                            <table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'pantalones-shorts',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-10">OTROS</a> </h4>
					</div>
					<div id="collapse1-10" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
                            <table>
									<tbody>
                                   
                                    <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'product_cat' => 'otros',
                                            'posts_per_page' => -1,
                                            'post_status' => 'publish',
                                            'orderby' => 'title'
                                            
                                        );
                                        $query = new WP_Query($args);
                                        foreach($query->posts as $p):
                                        $pid = $p->ID;
                                        $product = new WC_Product( $pid );
                                    ?>
                                    <tr class="product">
                                        <td><a href="<?php echo get_permalink($pid); ?>"><?php echo $p->post_title; ?></a></td>
                                        <td class="price"><?php echo $product->get_price_html(); ?></td>
                                        <td>
                                            <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                            </form>
                                        </td>
                                        </tr><!-- /item -->
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category1" role="tablist" style="display: block;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse1-11">TOWELING</a> </h4>
					</div>
					<div id="collapse1-11" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>5 Shirts On Hanger</td>
											<td>$10.00</td>
										</tr>
										<tr>
											<td>10 Shirts @ 1.90 </td>
											<td>$19.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category2" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse2-1">SUITS</a> </h4>
					</div>
					<div id="collapse2-1" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>5 Shirts On Hanger</td>
											<td>$10.00</td>
										</tr>
										<tr>
											<td>10 Shirts @ 1.90 </td>
											<td>$19.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category2" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse2-2">DRESS/SKIRT</a> </h4>
					</div>
					<div id="collapse2-2" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>5 Shirts On Hanger</td>
											<td>$10.00</td>
										</tr>
										<tr>
											<td>10 Shirts @ 1.90 </td>
											<td>$19.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category2" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse2-3">TROUSERS</a> </h4>
					</div>
					<div id="collapse2-3" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>5 Shirts On Hanger</td>
											<td>$10.00</td>
										</tr>
										<tr>
											<td>10 Shirts @ 1.90 </td>
											<td>$19.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category2" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse2-4">OUTDOOR</a> </h4>
					</div>
					<div id="collapse2-4" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>5 Shirts On Hanger</td>
											<td>$10.00</td>
										</tr>
										<tr>
											<td>10 Shirts @ 1.90 </td>
											<td>$19.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category2" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse2-5">KNITWEAR</a> </h4>
					</div>
					<div id="collapse2-5" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>5 Shirts On Hanger</td>
											<td>$10.00</td>
										</tr>
										<tr>
											<td>10 Shirts @ 1.90 </td>
											<td>$19.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category2" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse2-6">BEDDING</a> </h4>
					</div>
					<div id="collapse2-6" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>5 Shirts On Hanger</td>
											<td>$10.00</td>
										</tr>
										<tr>
											<td>10 Shirts @ 1.90 </td>
											<td>$19.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category3" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse3-1">ALTERATIONS</a> </h4>
					</div>
					<div id="collapse3-1" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>Pants - Hem</td>
											<td>$12.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category3" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse3-2">IRONING</a> </h4>
					</div>
					<div id="collapse3-2" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>Long Sleeve Shirt</td>
											<td>$2.50</td>
										</tr>
										<tr>
											<td>Short Sleeve Shirt</td>
											<td>$2.50</td>
										</tr>
										<tr>
											<td>Pants</td>
											<td>$2.50</td>
										</tr>
										<tr>
											<td>Shorts</td>
											<td>$2.50</td>
										</tr>
										<tr>
											<td>Shorts-Cargo</td>
											<td>$3.75</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
				<!--  -->
				<div class="panel category3" role="tablist" style="display: none;">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapse3-3">HOUSEHOLD</a> </h4>
					</div>
					<div id="collapse3-3" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<!--  -->
							<div class="table-price">
								<table>
									<tbody>
										<tr>
											<td>Comforter</td>
											<td>$25.95</td>
										</tr>
										<tr>
											<td>Pillow Case</td>
											<td>$4.95</td>
										</tr>
										<tr>
											<td>Duvet</td>
											<td>$25.95</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
				<!-- / -->
			</div>
		</div>
	</div>








<?php
get_footer();
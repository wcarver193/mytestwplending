<?php 
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => -1, 'post_type' => 'ag_pricing_table' );
	$myposts = $my_posts->query( $args );
?>
<div id="pricing" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php the_field( 'pricing_table' ); ?></h2>
					
				</div>
				<!-- /Section header -->

				<!-- pricing -->
				<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>	
					<div class="col-sm-4">
						<div class="pricing">
							<div class="price-head">
								<span class="price-title"><?php echo $post->post_title; ?> </span>
								<div class="price">
									<h3>$<?php the_field('pt_price'); ?><span class="duration">/ month</span></h3>
								</div>
							</div>
							<?php echo $post->post_content; ?>
							<div class="price-btn">
								<a href="<?php the_field('order_url'); ?>" class="outline-btn">Purchase now</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<!-- /pricing -->

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

</div>
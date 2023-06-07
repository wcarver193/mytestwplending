	<?php 
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => -1, 'post_type' => 'ag_offers' );
	$myposts = $my_posts->query( $args );
?>
<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php the_field( 'thats_what_we_can!' ); ?></h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<?php the_field('offer_icon'); ?>
							<h3><?php echo $post->post_title; ?> </h3>
							<p><?php the_field('offer_description'); ?></p>
						</div>
					</div>
				<!-- /service -->
				<?php endforeach; ?>
				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
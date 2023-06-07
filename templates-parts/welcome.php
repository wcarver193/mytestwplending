<?php 
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => -1, 'post_type' => 'ag_welcome' );
	$myposts = $my_posts->query( $args );
?>
		<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php the_field( 'welcome_to_website' ); ?></h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
			<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>	
				<div class="col-md-4">
					<div class="about">
						<?php the_field('feature_icon'); ?>
						<h3><?php echo $post->post_title; ?>  </h3>
						<p><?php the_field('features_description'); ?></p>
						<a href="<?php the_field('read_more'); ?>">Read more</a>
					</div>
				</div>
				<?php endforeach; ?>
				<!-- /about -->
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	
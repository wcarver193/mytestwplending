	<?php 
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => -1, 'post_type' => 'ag_portfolio' );
	$myposts = $my_posts->query( $args );
?>
<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">
<p>portfolio.php</p>
			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php the_field( 'featured_works' ); ?></h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="col-md-4 col-xs-6 work">
						<?php
							$portfolio_thumbnail = get_field('portfolio_image'); 
						?>
						
					    	<img class="img-responsive" src="<?php echo $portfolio_thumbnail['sizes']['portfolio-thumbnail']; ?>" alt="">
							
						<div class="overlay"></div>
						<div class="work-content">
							<span><?php the_field('portfolio_category'); ?></span>
							<h3><?php echo $post->post_title; ?> </h3>
							<div class="work-link">
								<a href="<?php echo $portfolio_thumbnail['url']; ?>"><i class="fa fa-external-link"></i></a>
								<a class="lightbox" href="<?php echo $portfolio_thumbnail['url']; ?>"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<!-- /Work -->

				

			</div>
			<?php wp_reset_query(); ?>
			<!-- /Row -->
			<div class="row latestwbuttdown">
			
				<a href="<?php the_field('our_works_link'); ?>" class=" main-btn" id="latestwAdown">View All</a>
			</div>

		</div>
		<!-- /Container -->

	</div>
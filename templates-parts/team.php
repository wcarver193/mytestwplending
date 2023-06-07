<?php 
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => -1, 'post_type' => 'ag_team' );
	$myposts = $my_posts->query( $args );
?>
<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php the_field( 'our_team' ); ?></h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
						<?php $team_thumbnail = get_field('team_ photo'); 	?>
<img class="img-responsive" src="<?php echo $team_thumbnail['sizes']['team-thumbnail']; ?>" alt="">
								<div class="overlay">
								<div class="team-social">
									<a href="<?php echo get_field('team_fb_url'); ?>"><i class="fa fa-facebook"></i></a>
									<a href="<?php echo get_field('team_google_plus_url'); ?>"><i class="fa fa-google-plus"></i></a>
									<a href="<?php echo get_field('team_twitter_url'); ?>"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3><?php echo $post->post_title; ?></h3>
							<a href="<?php echo get_field('designer_mail'); ?>"><?php the_field('specialization'); ?></a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
				<!-- /team -->

				
				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
<?php 
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => -1, 'post_type' => 'ag_ourdiplomas' );
	$myposts = $my_posts->query( $args );
?>
<div id="testimonial" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri()?>/img/background3.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">
				<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>	
						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
	<?php $thumbnail = get_field('diplomas_photo'); 	?>
<img src="<?php echo $thumbnail['sizes']['diplomas-photo']; ?>" alt="">

								<h3 class="white-text"><?php echo $post->post_title; ?></h3>
								<span><?php the_field('diplomas_specialisation'); ?></span>
							</div>
							<p class="white-text"><?php the_field('diplomas_descrition'); ?></p>
						</div>
						<!-- /testimonial -->

				<?php endforeach; ?>

					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
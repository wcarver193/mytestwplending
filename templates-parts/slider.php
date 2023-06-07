<?php 
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => -1, 'post_type' => 'ag_about_slider' );
	$myposts = $my_posts->query( $args );
?>
		<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<?php $portfolio_thumbnail = get_field('slide_image'); ?>
							<img class="img-responsive" src="<?php echo $portfolio_thumbnail['sizes']['slider-image']; ?>" alt="">
						<?php endforeach; ?>
					</div>
		</div>
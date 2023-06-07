<?php 
//в этом футере соц.сети выведены через обычн. поля АСF, без примен. плагина OptionTree
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => -1, 'post_type' => 'ag_footr' );
	$myposts = $my_posts->query( $args );
?>
		<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="<?php echo ot_get_option( 'logo_white_header' ); ?>" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
									
								<li><a href="<?php the_field('soc_url'); ?>"><?php the_field('soc'); ?></a></li>
						<?php endforeach; ?>
					</ul>
					<!-- /footer follow -->
					<?php wp_reset_query(); ?>
					<!-- footer copyright -->
					<div class="footer-copyright">
						<p><?php the_field( 'copyright' ); ?></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<?php wp_footer(); ?>
</body>

</html>

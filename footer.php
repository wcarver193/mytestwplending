<!-- Footer -->
<!--в этом футере соц.сети выведены через плагин OptionTree, как в сайте secattempt и он врем. отключен, т.к в назв вписан 0---->
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
					<?php
						$m_social = ot_get_option( 'social' );
					?>
					<ul class="footer-follow">
						
							<li><a href="<?php echo ot_get_option( 'facebook' ); ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo ot_get_option( 'twitter' ); ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo ot_get_option( 'google' ); ?>"><i class="fa fa-google"></i></a></li>
							<li><a href="<?php echo ot_get_option( 'instagram' ); ?>"><i class="fa fa-instagram"></i></a></li>
							<li><a href="<?php echo ot_get_option( 'linkedin' ); ?>"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="<?php echo ot_get_option( 'youtube' ); ?>"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

						<!-- footer copyright -->
					<div class="footer-copyright">
						<p><?php echo ot_get_option( 'copyright' ); ?><a href="<?php echo ot_get_option( 'copyright_url' ); ?>" target="_blank"><?php echo ot_get_option( 'design_studio' ); ?></a></p>
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

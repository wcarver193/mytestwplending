<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title"><?php the_field( 'get_in_touch' ); ?></h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p><?php echo ot_get_option( 'phone' ); ?></p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p><?php echo ot_get_option( 'email' ); ?></p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p><?php echo ot_get_option( 'address' ); ?></p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2 contact-form">
					<?php echo do_shortcode('[contact-form-7 id="184" title="Контакты:"]'); ?>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
			<!-- /Container -->

	</div>
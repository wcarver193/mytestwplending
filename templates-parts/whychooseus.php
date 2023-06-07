	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title"><?php the_field( 'why_choose_us' ); ?></h2>
					</div>
					<div>
							<?php the_field( 'why_choose_us_text' ); ?>
					</div>		
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
					<?php get_template_part( 'templates-parts/slider' ); ?>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
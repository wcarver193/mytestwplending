<?php get_header(); ?>
	<!-- /Header -->

<!-- welcome_to_website --- template-шаблон-->
<?php get_template_part('templates-parts/welcome')?>
<?php wp_reset_query(); ?>
<!-- /welcome_to_website -->

		<!-- Portfolio -->	
<?php get_template_part('templates-parts/prod')?>
<?php wp_reset_query(); ?>	
		<!-- /Portfolio -->

	<!-- That's what we can! -->
<?php get_template_part('templates-parts/offers')?>
<?php wp_reset_query(); ?>
	<!-- /That's what we can! -->

	<!-- Why Choose Us -->
<?php get_template_part('templates-parts/whychooseus')?>
<?php wp_reset_query(); ?>
	<!-- /Why Choose Us -->

	<!-- Numbers -->
<?php get_template_part('templates-parts/ourProgress')?>	
<?php wp_reset_query(); ?>
	<!-- /Numbers -->

	<!-- Pricing -->
<?php get_template_part('templates-parts/prices')?>	
<?php wp_reset_query(); ?>
	<!-- /Pricing -->


	<!-- Testimonial -->
<?php get_template_part('templates-parts/ourdiplomas')?>
<?php wp_reset_query(); ?>	
	<!-- /Testimonial -->

	<!-- Team -->
<?php get_template_part('templates-parts/team')?>
<?php wp_reset_query(); ?>	
	<!-- /Team -->

	<!-- Blog -->
<?php get_template_part('templates-parts/blog')?>
<?php wp_reset_query(); ?>
	<!-- /Blog -->

	<!-- Contact -->
<?php get_template_part('templates-parts/contact')?>
<?php wp_reset_query(); ?>	
	<!-- /Contact -->
	
<?php get_footer(); ?>	

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bebe
 */

get_header('search');
?>
<p>404.php</p>
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h3 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bebe' ); ?></h3>
			</header>
		</section>

	</main>

<?php
get_footer();

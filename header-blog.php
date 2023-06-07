<!DOCTYPE html>
<?php $id_page = get_the_ID(); ?>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php the_title(); ?></title>

	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>

	<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="/">
							<img class="logo" src="<?php echo ot_get_option( 'logo_black_header' ); ?>" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<?php
					wp_nav_menu( 
							array( 
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => 'main-nav nav navbar-nav navbar-right') 
						);
					
				?>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->
<?php echo '<p style="font-size:10px;margin-left:20px;">header-blog.php</p>';?>
		<!-- header wrapper -->
		<div class="header-wrapper sm-padding bg-grey">
			<div class="container">
				<h3>
				    <?php
			   if(is_tag()){
				   echo esc_html__('Tag Archive: ','bebe').single_tag_title('',false);
				}
				else if(is_search()){
					echo 'Search Results for: '.get_search_query();
				}
				else if(is_category()){
					echo "Category: "; the_category(' , ');
				} else if(is_author()){
					echo "Author: ".get_the_author();
				} else if (is_post_type_archive('product')){
					echo 'Works';
				} else if(is_archive()){
					if(is_day()){
						echo 'Day Archive: ' . get_the_date('d M');
					} else if(is_month()){
						echo 'Month Archive: ' . get_the_date('M');
					} else if(is_year()) {
						echo 'Year Archive: ' . get_the_date('Y');
					} else {
						echo "Archive";
					}
				} else {
				wp_title('');
			} ?>
				
				</h3>
			
				<div class="breadcrumb">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('
				<p id="breadcrumbs">','</p>
				');
				}
				?>
				</div>
			</div>
		</div>
		<!-- /header wrapper -->

	</header>
	<!-- /Header -->
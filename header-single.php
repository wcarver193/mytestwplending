<!DOCTYPE html>
<?php $id_page = get_the_ID(); ?>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title><?php echo get_field('header_h1')?></title>
	
	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<?php echo '<p style="font-size:10px;margin-left:20px;">header-single.php</p>';?>
	<!-- Header -->
	<header id="home">
		<!-- Background Image 
		<div class="bg-img" style="background-image: url('<?php echo get_field('header_bg')?>')">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
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
<p>header-single</p>
		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text"><?php echo get_field('header_h1')?></h1>
							<p class="white-text"><?php echo get_field('description_h1')?>
							</p>
	<a href="<?php echo get_field('left_button_url')?>" class="white-btn"><?php echo get_field('left_button')?></a>
	<a href="<?php echo get_field('right_button_url')?>" class="main-btn"><?php echo get_field('right_button')?></a>
							
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
<?php get_header('blog');?>
<?php
    echo '<p style="font-size:10px;margin-left:20px;">single.php</p>';
?>
<!-- Blog -->
	<div id="blog" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-9">
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div <?php post_class("blog"); ?>>
						<div class="blog-img">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'blog-single-thumbnail' ); ?> 
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i><?php echo get_the_author(); ?></li><!--в get the autor() не нужен уже аргум. get_the_ID() -->
								<li><i class="fa fa-clock-o"></i><?php echo get_the_date('d M'); ?></li>
								<li><i class="fa fa-comments"></i><?php echo get_comments_number( get_the_ID() ); ?></li>
							</ul>
							<h2><?php the_title() ?></h2>
							<?php the_content() ?>
						</div>

						<!-- blog tags -->
						<div class="blog-tags">
							<h5>Tags :</h5>
								<?php
									$posttags = get_the_tags();
									if ($posttags) {
										foreach($posttags as $tag) {
										$tag_links[] = '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
										}
										 echo join( ', ', $tag_links );
									}
								?>
							
						</div>
						<!-- blog tags -->

						<!-- blog author -->
						<div class="blog-author">
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="<?php echo ot_get_option( 'authors_image' ); ?>" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h3><?php echo ot_get_option( 'authors_name' ); ?></h3>
										<div class="author-social">
											<ul class="footer-follow">
						
												<li><a href="<?php echo ot_get_option( 'facebook' ); ?>"><i class="fa fa-facebook"></i></a></li>
												<li><a href="<?php echo ot_get_option( 'twitter' ); ?>"><i class="fa fa-twitter"></i></a></li>
												<li><a href="<?php echo ot_get_option( 'instagram' ); ?>"><i class="fa fa-instagram"></i></a></li>
												<li><a href="<?php echo ot_get_option( 'linkedin' ); ?>"><i class="fa fa-linkedin"></i></a></li>
							
											</ul>
										</div>
									</div>
									<p><?php echo ot_get_option( 'authors_description' ); ?></p>
								</div>
							</div>
						</div>
						<!-- /blog author -->

<!-----------------------blog comments --------------------------------->
						<div class="blog-comments">
							<h3 class="title">(<?php echo get_comments_number( get_the_ID() ); ?>) Comments</h3>
<!--если возм.комментов открыта и если их больше 1 то подключ.comments.php-->
							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
						

						</div>
						
					</div>
					<?php endwhile; // End of the loop. ?>
					
				</main>
				<!-- /Main -->
				<?php get_sidebar(); ?>
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->
<?php get_footer(); ?>
		
		
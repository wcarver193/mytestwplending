<?php get_header('blog'); ?>
<?php echo '<p style="font-size:10px;margin-left:20px;">archive</p>';?>

<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php the_field( 'recents_news' ); ?></h2>
				</div>
				<!-- /Section header -->
            <div class="row row-flex">
				<!-- blog -->
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4">
						<div class="blog"">
							
								<?php echo get_the_post_thumbnail( $post->ID, 'blog-thumbnail' ); ?><!--get_the_post_thumbnail сама добавл. в код теги <img и alt -->
							
							<div class="blog-content">
								<ul class="blog-meta">
									<li><i class="fa fa-user"></i><?php echo get_the_author(); ?></li>
									<li><i class="fa fa-clock-o"></i><?php echo date( 'd M', strtotime( $post->post_date ) ); ?></li>
									<li><i class="fa fa-comments"></i><?php echo get_comments_number( $post->ID ); ?></li><br>
								</ul>
								<h3><?php echo $post->post_title; ?></h3>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>">Read more</a>
							</div>
						</div>
					</div>
				<!-- /blog -->
				<?php	endwhile;
			endif;
			?>
			</div><!-- /Row -->
			<div class="pagnsn" >
				 <?php
				$settings = array(
				    'prev_text' => 'Newer',
					'next_text' => 'Older'
					);
				echo paginate_links( $settings );
    	  ?>
			</div>
		</div>
		<!-- /Container -->
</div>
<?php get_footer(); ?>
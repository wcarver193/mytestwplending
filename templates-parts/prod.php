<div id="portfolio" class="section md-padding bg-grey">
	<!-- Container -->
  <div class="container">
  <p>prod.php</p>
			<!-- Row -->
	<div class="row">
        <div class="section-header text-center">
					<h2 class="title"><?php the_field( 'featured_works' ); ?></h2>
		</div>
	 <?php           $paged = 1;
				if(get_query_var('paged')){$paged = get_query_var('paged'); }
				if(get_query_var('page')){ $paged = get_query_var('page'); }
				
				$default_listing =[
						'post_type' => 'product',
						'posts_per_page' => 6,
						'paged' => $paged
						];
				$products_listing = new WP_Query($default_listing);
				
		
			   if( $products_listing->have_posts()){
				   while($products_listing->have_posts()){$products_listing->the_post();
?>
				    <div class="col-md-4 col-sm-6 col-xs-6 work">
					     
						 <?php echo '<div class="img-responsive">'. get_the_post_thumbnail(get_the_ID(),'portfolio-thumbnail') . '</div>'; ?>								
						<div class="overlay"></div>
						<div class="work-content">
						   <?php $types = get_the_terms(get_the_ID(), 'type');
									if(!empty($types)){
										foreach($types as $type){
											echo '<span>' . $type->name . '</span>';
										}
									} ?>
							<h3><a href="<?php the_permalink(); ?> "><?php the_title();?></a></h3>
							<!--<div class="work-link">
								<a href="<?php echo $portfolio_thumbnail['url']; ?>"><i class="fa fa-external-link"></i></a>
								<a class="lightbox" href="<?php echo $portfolio_thumbnail['url']; ?>"><i class="fa fa-search"></i></a>
							</div>-->
						</div>
					</div>
				
				
			  <?php }
			   }  ?>
    </div>
	
	<?php wp_reset_query(); ?>
			<!-- /Row -->
			<div class="row latestwbuttdown">
			
				<a href="<?php the_field('our_works_link'); ?>" class=" main-btn" id="latestwAdown">View All</a>
			</div>
  </div>
</div>
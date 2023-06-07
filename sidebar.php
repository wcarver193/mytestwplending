<?php 
	global $post; 
	$my_posts = new WP_Query;

	// делаем запрос
	$args = array( 'posts_per_page' => 3, 'post_type' => 'post' );
	$myposts = $my_posts->query( $args );
?>
<aside id="aside" class="col-md-3">

					<!-- Search -->
					
					<!-- /Search -->
					<div class="widget">
						<div class="widget-search">
						<form role="search" method="get" id="searchform" class="searchform" action="/">
							<input class="search-input" type="text" name="s" placeholder="search"><!--метод get добавл. переменную s для поиска-->
							<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
						</form>
						</div>
					</div>
					<!-- Category -->
					<div class="widget">
						<h3 class="title">Category</h3>
						<div class="widget-category">
								<?php
							$categories = get_categories( array(
								'orderby' => 'name',
								'order'   => 'ASC'
							) );
							 
							foreach( $categories as $category ) {
								$category_link = sprintf( 
									'<a href="%1$s" alt="%2$s">%3$s<span>(%4$s)</span></a>',
									esc_url( get_category_link( $category->term_id ) ),
									esc_attr( $category->name ),
									esc_html( $category->name ),
									esc_html( $category->count )
								);
								 
								echo $category_link;
							} 
							?>
						</div>
					</div>
					<!-- /Category -->

					<!-- Posts sidebar -->
				<div class="widget">
						<h3 class="title">New Posts</h3>
				<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<?php echo get_the_post_thumbnail( $post->ID, 'widget-new-posts-thumbnail' ); ?>
								<?php echo $post->post_title; ?>
							</a>
							<ul class="blog-meta">
								<li><?php echo date( 'd M', strtotime( $post->post_date ) ); ?></li>
							</ul>
						</div>
						<!-- /single post -->
				<?php endforeach; ?>
				</div>
					<!-- /Posts sidebar -->

					<!-- Tags -->
					<div class="widget">
						<h3 class="title">Tags</h3>
						<div class="widget-tags">
						
							<?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
						
								<?php wp_tag_cloud( 'smallest=12&largest=12' ); ?>
							<?php endif; ?>
						</div>
					</div>
					<!-- /Tags -->

				</aside>
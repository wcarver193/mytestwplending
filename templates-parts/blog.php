<?php
    //echo '<h6 style="color:grey;font-weight:300;">blog</h6>';
	$pagination = '';//опред.перем. что они пустые
	$myposts = '';
	global $post; 
	$my_posts = new WP_Query;

		// делаем запрос, если это главн.страница то выводим только 3 поста,
		//если страница поиска is_search? тогда 
		//а иначе - else - то 9 постов и вывод пагинации. на главной пагинации нет!
	if ( is_front_page() ) {
				
		$args = array( 'posts_per_page' => 3, 'post_type' => 'post' );
		
		$myposts = $my_posts->query( $args );
		
	}elseif( is_search() ){	
	
		$s=get_search_query(); // перем $s присв. то, что ввел пользов. в поиск.строку
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; //выбор текущ.страницы
		$args = array(
     		'posts_per_page' => 6,
			'post_type' => 'post',
			's' =>$s,
			'paged' => $paged
			);
		$myposts = $my_posts->query( $args ); 
		
		/*$pagination = get_the_posts_pagination( array(//вывод пагинации. на главной ее нет!
			'mid_size' => 2,
			'prev_text' => __( 'Newer', 'agencysec' ),
			'next_text' => __( 'Older', 'agencysec' )
		) );*/
					
        	$big = 999999999; // need an unlikely integer
			$translated = __( 'Page', 'mytextdomain' ); // Supply translatable string

			$pagination = paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'prev_text' => __( 'Newer', 'agencysec' ),
			    'next_text' => __( 'Older', 'agencysec' ),
				'total' => $my_posts->max_num_pages,
					'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
			) );
	}else{
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array( 
		          'posts_per_page' => 6,
				  'post_type' => 'post',
				  'paged' => $paged
				  );
		$myposts = $my_posts->query( $args );
		
	   $pagination = get_the_posts_pagination( array(
			'mid_size' => 2,
			'prev_text' => __( 'Newer', 'agencysec' ),
			'next_text' => __( 'Older', 'agencysec' )
		) );//в перем.$pagination записываем вывод страниц со словами вперед и назад. а выводим ее ниже, согласно верстке
	}
?>

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
				<?php if ( have_posts() ){ foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
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
				
				<?php endforeach;
				}else{
					echo '<div class = "row nonfnd">' . '<h2 col-12>Nothing found!</h2>' . '<p col-12>';
					echo esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bebe' ) . '</p>'; 
					get_search_form();?>
					
				<?php } ?>
				</div>
			</div><!-- /Row -->
			<div class="pagnsn" >
				<?php 
					echo $pagination;//выводим перем.$pagination, в кот. намер страницы и слова вперед и назад
		        ?>
			</div>
		</div>
		<!-- /Container -->
</div>
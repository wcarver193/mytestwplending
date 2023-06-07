<?php  /* в этот файл вставлен html код блока <-- comment --> из "blog--single.html" и отвечает за стили вывода комментариев  */
	function format_comment($comment, $args, $depth) { 
	$GLOBALS['comment'] = $comment;
	
		    echo '
		    <!-- comment -->
			<div ';
				comment_class('media');
			echo ' 
				id="comment-id-'; comment_ID();
			echo '">
				<div class="media-left">

					<img class="media-object" src="'.get_avatar_url( $GLOBALS['comment'], array(
						'size' => 66,
						'default'=>'mystery',) ).'" alt="">
				</div>
				<div class="media-body">
					<h4 class="media-heading">';
				printf(__('%s'), get_comment_author_link());		
			echo	'<span class="time">';
				printf(__('%1$s'), get_comment_date(), get_comment_time());
			echo 	'</span>';
				comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'depth' => $depth,'add_below' => $add_below, 'max_depth' => $args['max_depth'])));
			echo '</h4>';
					if ($comment->comment_approved == '0') :
						echo '<em>Your comment is awaiting moderation.</em><br />';
					endif;
					comment_text();
			echo '
				</div>
			</div>
		   ';
	} 
/* блок <-- comment --> из "blog--single.html" и отвечающий за стили вывода комментариев          
						<-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="./img/perso2.jpg" alt="">
								</div>
								<div class="media-body">
									<h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
									<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
								</div>
							</div>
							<!-- /comment -->	*/
?>
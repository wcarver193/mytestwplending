<?php
//если пароль есть то возвращаем, а если нет, то продолжаем
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area"> 
		<?php 
			if ( have_comments() ) : ?>
				<ol class="comment-list"> 
					<?php 
	$args = array( 'type' => 'comment', 'callback' => 'format_comment' ); // As a 'callback' function is given, format_comment() is used instead of the default html5_comment() function.
						wp_list_comments( $args ); 
		?>
				</ol>
<!--------------------------------navigation-------------------------------------------->	
<div class="navigation">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div>

<?php else : // this is displayed if there are no comments so far
if ('open' == $post->comment_status) : 
else : ?>
<p class="nocomments">Комментарии закрыты.</p>
<?php endif;
endif; ?>
<!---------------------------------------------------------------------------->	
<?php if ('open' == $post->comment_status) : ?>
<div id="respond">
    <div class="cancel-comment-reply">
        <small><?php cancel_comment_reply_link(); ?></small>
    </div>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
    <p>Вы должны быть <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">авторизованы</a>, чтобы разместить комментарий.</p>
<?php else : ?>
<!-- форма для отправки комментария-->
<?php if ( $user_ID ) : ?>
    <p>Вы вошли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Выйти из этого аккаунта">Выйти &raquo;</a></p>
	<!---------------коммент как админ------------------------------------------------>	
	<div class="reply-form">
<h3 class="title">Leave a reply</h3>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="commentform" method="post">
	 
		   <label></label>
		   <textarea name="comment" id="comment" rows="5" cols="5" placeholder="Add Your Commment" required></textarea>
		   <br />
		   <button type="submit" class="main-btn">Submit</button>
	   
	<?php comment_id_fields();
	do_action('comment_form', $post->ID); ?>
	</form>
</div>
<?php else : ?>
<!---------------------------комменты как простой чел---------------------------------->
<div class="reply-form">
<h3 class="title">Leave a reply</h3>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="commentform" method="post">
		
			
			<input name="author" id="author"  class="input" placeholder="Name" type="text" size="30" alt="Name" required />
			<label></label>
			<input name="email" id="email" class="input" placeholder="Email" type="text" size="30" alt="Email" required />
			<label></label>
			<textarea name="comment" id="comment" rows="5" cols="5" placeholder="Add Your Commment" required></textarea>
		   <br />
		   <button type="submit" class="main-btn">Submit</button>
	   
	<?php comment_id_fields();
	do_action('comment_form', $post->ID); ?>
	</form>
</div>
<?php endif;?>

</div>
<?php endif;
 endif;?>
<?php 
// REgister a single nav menu, to be constructed in the admin panel, and displayed in nav.php
register_nav_menus(array(
		'primary' => 'Primary Navigation' 
));

function thegeeklife_comment_form() {
	global $post;
	?>
	<div class="my-form">
		<h1 class="form-title">Add a Comment</h1>
		<form method="post" action="<?php bloginfo('url'); ?>/wp-comments-post.php">
			
			<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
			<input type="hidden" name="comment_parent" id="comment_parent" value="0"/>
			
			<div class="row-fluid">
			
				<input class="span4" id="author" name="author" type="text" placeholder="author"/>
				<input class="span4" id="email" name="email" type="text" placeholder="email"/>
				<input class="span4" id="website" name="website" type="text" placeholder="website"/>
			</div>
				<textarea class="span11" rows="10" name="comment"></textarea>
			
				<input class="btn btn-success" name="submit" type="submit" value="Post Comment"/>
		</form>
	</div>
	<?php
}
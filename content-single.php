<?php if(have_posts())	:	?>
	<?php while(have_posts())	:	the_post()?>
		<h2 class="post-title"><?php the_title() ?></h2>
		<div class="meta">
			<span class="author">by <?php the_author()?></span>
			<span class="date">Published on <?php the_time(get_option('date_format'))?></span>
			<span class="num-comments"><?php comments_number ( 'no comments', 'one comment', '% comments' )?></span>
		</div>
		
		
		<div class="story-content">
			<?php the_content() ?>
		</div>
		<?php if(comments_open){
			
			$comments = get_comments(array('post_id'=>$post->ID));
			echo('<ul class="my-comment">');
			wp_list_comments(null,$comments);
			echo('</ul>');
			
			thegeeklife_comment_form();
		}
	
	
	
		?>
	 <?php  endwhile ?>
	<?php endif ?>
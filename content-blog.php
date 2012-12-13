<?php if(have_posts())	:	?>
	<?php while(have_posts())	:	the_post()?>
		<h2><?php the_title()?></h2>
		<span class="date">Published on <?php the_time(get_option('date_format')); ?> <?php comments_number( 'no comments', 'one comment', '% comments' ); ?></span>
		
		<div class="story-content">
			<?php the_content() ?>
		</div>
	<?php endwhile ?>
<?php endif ?> 
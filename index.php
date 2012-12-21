<!DOCTYPE html>
<html>
	<head>
		<?php get_header()?>
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="wrapper">
				<header>
					<h1><a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></h1>
				</header>
			<nav id="primary-nav">
				<?php get_template_part('nav')?>
			</nav>
			<div id="main">
				<div class="row-fluid">
				<!-- MAIN COLUMNS  -->
				<div class="span9">
					<?php 
					/**
					 * Check to see if the current request...
					 * is_category()
					 * is_front_page()
					 * is_home()
					 * is_404
					 * is_archive()
					 * is_page
					 * is_single() --> e.g. a single post
					 * is_tag()
					 * is_search() --> a page display search results
					 */
					if (is_front_page())	{
						// Include file named content-home.php
						get_template_part('content','home');
						// Include file named content-single.php
					} elseif (is_page() || is_single())	{
						get_template_part('content','single');
					} elseif (is_search()) {
						get_template_part('content','search');
					} else{
						get_template_part('content','blog');
					}
					?>
			
				</div>
				
				<!-- RIGHT SIDEBAR  -->
				<div class="span3">
					<?php get_sidebar() ?>
				</div>
			</div>
		</div>
			<footer>
				<?php get_footer() ?>			
			</footer>
	</div>
	</body>
</html>

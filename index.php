<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>

	<div id="contents">
		<?php 
			if ( have_posts() ) : 
				while ( have_posts() ) : the_post();

					the_content();

				endwhile; 
			endif;
		?>
	</div>

	<?php wp_footer(); ?>
	
	</body>
</html>


	<?php get_header(); ?>
	<h1>home.php</h1>
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
				if (has_post_format('standard') ){
					$format = get_post_format(); 
					echo $format; 
				} else {
					echo 'false'; 
				}
			// Include the page content template.
			
				the_title(); 
				the_content();
		
			// get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>


		<?php get_footer(); ?>
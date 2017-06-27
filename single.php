	<?php get_header(); ?>
	<h1>Single.php</h1>
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
				get_post_format(); 
			// Include the page content template.
			
				the_title(); 
		
			// get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>


		<?php get_footer(); ?>
<?php 
	get_header();

    if ( have_posts() ) {
    the_post();
    
    get_template_part( 'template/post/content', 'page' );
    }

	get_footer();
?>
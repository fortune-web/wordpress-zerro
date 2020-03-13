<?php 
	get_header();

    if ( have_posts() ) {
    the_post();
    
    get_template_part( 'template/post/content', get_post_format() );
    }

	get_footer();
?>
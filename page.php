<?php 
	get_header();

    if ( have_posts() ) {
    the_post();
    echo '<div class="content">';
    echo "<h1>", the_title(); , "</h1>"
    the_content();
    echo '</div>';
    }

	get_footer();
?>
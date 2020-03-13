<?php

function zerro_setup() {
	
	add_theme_support(
		'post-formats',
		array(
			'image',)
	);

}
add_action( 'after_setup_theme', 'zerro_setup' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	<title><?php bloginfo( 'name' ); ?></title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
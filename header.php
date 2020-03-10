<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	<link rel="alternate" type="application/rss+xml" title='<?php echo get_bloginfo('name'); ?>' href='<?php bloginfo('rss2_url'); ?>' />
	<title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title(''), " &raquo; ", get_bloginfo('name');
    }?>
	</title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
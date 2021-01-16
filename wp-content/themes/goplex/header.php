<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">	
<?php 
	// WP 5.2 new action hook
	//do_action( 'wp_body_open' );
	
	//get_template_part( 'inc/content', 'preloader' ); 
 
	/**
	 * Get header layout by theme option
	 * Overrides handled by theme_filters by pre-filtering the theme_mod call
	 */
	get_template_part( 'inc/layout-header', get_theme_mod( 'header_layout', 'white' ) ); 
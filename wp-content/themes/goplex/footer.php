<?php 
	get_template_part( 'inc/side-menu' );

	/**
	 * Get footer layout by theme option
	 * Overrides handled by theme_filters by pre-filtering the theme_mod call
	 */
	get_template_part( 'inc/layout-footer', get_theme_mod( 'footer_layout', 'widgets' ) ); 	          

	/**
	 * Include the back to top button markup
	 */
	get_template_part( 'inc/content', 'back-to-top' ); 

	wp_footer(); 
?>
</body>
</html>
<?php
/**
 * Theme Mode
 */
/**
 * Show Settings Pages
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Show New Layout
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/*******************************************************/
add_filter('ot_google_fonts_api_key','bauhaus_ot_google_fonts_api_key');

function bauhaus_ot_google_fonts_api_key($key) {
	return ot_get_option('google_fonts_api_key','AIzaSyBSMah19otro4eCNjhCScE1zs4MTam3udM');
}




/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'bauhaus_custom_theme_options' );
/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.3.0
 */
function bauhaus_custom_theme_options() {
	/* OptionTree is not loaded yet, or this is not an admin request */
	if ( !function_exists( 'ot_settings_id' ) || !is_admin() ) {
		return false;
	}
	/**
	 * Get a copy of the saved settings array.
	 */
	$saved_settings = get_option( ot_settings_id(), array() );
	$custom_settings = array(
		'contextual_help' => array(
			'sidebar' => ''
		),
		'sections' => array(
			array(
				'id' => 'general',
				'title' => esc_html__( 'General Config', 'bauhaus' )
			),
			array(
				'id' => 'css',
				'title' => esc_html__( 'Custom CSS & JS', 'bauhaus' )
			),
			array(
				'id' => 'multilanguage',
				'title' => esc_html__( 'Multilanguage', 'bauhaus' )
			),
			array(
				'id' => 'mask',
				'title' => esc_html__( 'Image mask', 'bauhaus' )
			),
			array(
				'id' => 'google_fonts',
				'title' => esc_html__( 'Google Fonts', 'bauhaus' )
			),
			array(
				'id' => 'typography',
				'title' => esc_html__( 'Typography', 'bauhaus' )
			),
			array(
				'id' => 'navigation',
				'title' => esc_html__( 'Navigation / header', 'bauhaus' )
			),

			array(
				'id' => 'sidebars_settings',
				'title' => esc_html__( 'Theme Sidebars Color Options', 'bauhaus' )
			),


			array(
				'id' => 'frontheader_color',
				'title' => esc_html__( 'Frontage Color Options', 'bauhaus' )
			),

			array(
				'id' => 'header',
				'title' => esc_html__( 'blog/Page Options', 'bauhaus' )
			),
			array(
				'id' => 'header_color',
				'title' => esc_html__( 'blog/Page Header Color Options', 'bauhaus' )
			),


			array(
				'id' => 'error_page',
				'title' => esc_html__( '404 Page Header Options', 'bauhaus' )
			),
			array(
				'id' => 'search_page',
				'title' => esc_html__( 'Search Page Header Options', 'bauhaus' )
			),


		),
		'settings' => array(


			array(
				'id' => 'additionalcss',
				'label' => esc_html__( 'additional css', 'bauhaus' ),
				'desc' => esc_html__( 'You can add additional css ', 'bauhaus' ),
				'std' => '',
				'type' => 'css',
				'section' => 'css',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => ''
			),

			array(
				'id' => 'additionaljs',
				'label' => esc_html__( 'additional javascript', 'bauhaus' ),
				'desc' => esc_html__( 'You can add additional javascript ', 'bauhaus' ),
				'std' => '',
				'type' => 'css',
				'section' => 'css',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => ''
			),

			/*		array(
						'id' => 'bauhaus_mask',
						'label' => esc_html__( 'Background Black mask', 'bauhaus' ),
						'desc' => sprintf( esc_html__( 'Background Image Black mask %s or %s.', 'bauhaus' ), '<code>on</code>', '<code>off</code>' ),
						'std' => 'on',
						'type' => 'on-off',
						'section' => 'mask',
						'operator' => 'and'
					),
		*/

			/*********************/

			array(
				'id' => 'bauhaus_multilanguage',
				'label' => esc_html__( 'Multilanguage in header ', 'bauhaus' ),
				'desc' => esc_html__( 'You can add multilanguage html code or shortcode in header', 'bauhaus' ),
				'std' => '',
				'type' => 'textarea',
				'section' => 'multilanguage',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => ''
			),
			array(
				'id' => 'bauhaus_multilanguage_footer',
				'label' => esc_html__( 'Multilanguage in footer  ', 'bauhaus' ),
				'desc' => esc_html__( 'You can add multilanguage html code or shortcode in footer', 'bauhaus' ),
				'std' => '',
				'type' => 'textarea',
				'section' => 'multilanguage',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => ''
			),
			//////////////////*/
			array(
				'id' => 'bauhaus_m_c',
				'label' => esc_html__( 'Mask color', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color with opacity', 'bauhaus' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'mask'
			),


			/**
			 * FRONTPAGE COLOR SETTINGS.
			 */

			array(
				'id' => 'bauhaus_frontpage_header_slogan_color',
				'label' => esc_html__( 'Frontpage paragraph color', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'frontheader_color'
			),


			array(
				'id' => 'bauhaus_frontpage_slider_dotes_active',
				'label' => esc_html__( 'Slider dotes active', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'frontheader_color'
			),
			array(
				'id' => 'bauhaus_frontpage_slider_dotes',
				'label' => esc_html__( 'Slider dotes ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'frontheader_color'
			),
			array(
				'id' => 'bauhaus_frontpage_hamburg',
				'label' => esc_html__( 'Hamburg menu color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'frontheader_color'
			),


			/*** GENERAL SETTINGS. **/


			array(
				'id' => 'bauhaus_logowidth',
				'label' => esc_html__( 'Logo width', 'bauhaus' ),
				'desc' => esc_html__( 'Logo width', 'bauhaus' ),
				'std' => '33',
				'type' => 'numeric-slider',
				'min_max_step' => '0,300',
				'section' => 'general',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_logoheight',
				'label' => esc_html__( 'Logo height', 'bauhaus' ),
				'desc' => esc_html__( 'Logo height', 'bauhaus' ),
				'std' => '33',
				'type' => 'numeric-slider',
				'min_max_step' => '0,300',
				'section' => 'general',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_navbar_height',
				'label' => esc_html__( 'Header Navbar height', 'bauhaus' ),
				'desc' => esc_html__( 'Header Navbar height', 'bauhaus' ),
				'std' => '7',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'general',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_font_size',
				'label' => esc_html__( 'Logo  text font size', 'bauhaus' ),
				'desc' => esc_html__( 'Logo font size', 'bauhaus' ),
				'std' => '1.875',
				'type' => 'numeric-slider',
				'min_max_step' => '0,6,0.001',
				'section' => 'general',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),

			/**
			 * GOOGLE FONTS SETTINGS.
			 */
			array(
				'id' => 'google_fonts_api_key',
				'label' => esc_html__( 'Google Fonts API key', 'bauhaus' ),
				'desc' => 'Add Google Fonts API key https://console.developers.google.com/apis/library/webfonts.googleapis.com/',
				'type' => 'text',
				'section' => 'google_fonts',

			),



			/**
			 * GOOGLE FONTS SETTINGS.
			 */
			array(
				'id' => 'body_google_fonts',
				'label' => esc_html__( 'Google Fonts', 'bauhaus' ),
				'desc' => 'Add Google Font and after the save settings follow these steps Dashboard  > Appearance > Theme Options > Typography',
				'std' => '',
				'type' => 'google-fonts',
				'section' => 'google_fonts',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			/**
			 * TYPOGRAPHY SETTINGS.
			 */
			array(
				'id' => 'bauhaus_tipigrof',
				'label' => esc_html__( 'Typography', 'bauhaus' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'bauhaus' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_tipigrof1',
				'label' => esc_html__( 'Typography h1', 'bauhaus' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'bauhaus' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_tipigrof2',
				'label' => esc_html__( 'Typography h2', 'bauhaus' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'bauhaus' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_tipigrof3',
				'label' => esc_html__( 'Typography h3', 'bauhaus' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'bauhaus' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_tipigrof4',
				'label' => esc_html__( 'Typography h4', 'bauhaus' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'bauhaus' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_tipigrof5',
				'label' => esc_html__( 'Typography h5', 'bauhaus' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'bauhaus' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_tipigrof6',
				'label' => esc_html__( 'Typography h6', 'bauhaus' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'bauhaus' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),

			array(
				'id' => 'bauhaus_blockquote_typography',
				'label' => esc_html__( ' Typography  quotation - blockquote ', 'bauhaus' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'bauhaus' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			/**
			 * NAVIGATION SETTINGS.
			 */

			array(
				'id' => 'bauhaus_header_bg',
				'label' => esc_html__( 'Header background color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color with opacity', 'bauhaus' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'navigation'
			),
			array(
				'id' => 'bauhaus_header_afix_bg',
				'label' => esc_html__( 'Header background affix color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color with opacity', 'bauhaus' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'navigation'
			),

			array(
				'id' => 'bauhaus_navigationbg',
				'label' => esc_html__( 'Theme navigation background color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color with opacity', 'bauhaus' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'navigation'
			),
			array(
				'id' => 'bauhaus_navitem',
				'label' => esc_html__( 'Theme navigation menu item color', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'navigation'
			),

			array(
				'id' => 'bauhaus_navitemhover',
				'label' => esc_html__( 'Theme navigation menu item hover color', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'navigation'
			),

			array(
				'id' => 'bauhaus_navitem_social',
				'label' => esc_html__( 'Theme navigation menu  social icons color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'navigation'
			),

			array(
				'id' => 'bauhaus_navitem_copy',
				'label' => esc_html__( 'Theme navigation menu  copyright text color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'navigation'
			),


			array(
				'id' => 'bauhaus_sidebarwidgettitlecolor',
				'label' => esc_html__( 'Theme Sidebar widget title color', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),
			array(
				'id' => 'bauhaus_sidebarlinkcolor',
				'label' => esc_html__( 'Theme Sidebar link title color', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),
			array(
				'id' => 'bauhaus_sidebarlinkhovercolor',
				'label' => esc_html__( 'Theme Sidebar link title hover color', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),

			/**
			 * blog/PAGE HEADER SETTINGS.
			 */


			array(
				'id' => 'bauhaus_blogheaderbgcolor_mask',
				'label' => esc_html__( 'blog preview items background mask color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'header'
			),


			array(
				'id' => 'bauhaus_blogheaderpaddingtop',
				'label' => esc_html__( 'Header padding top', 'bauhaus' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'bauhaus' ),
				'std' => '17',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'header',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_blogheaderpaddingbottom',
				'label' => esc_html__( 'Header padding bottom', 'bauhaus' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'bauhaus' ),
				'std' => '14',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'header',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),

			/**
			 * SINGLE HEADER SETTINGS.
			 */


			/**
			 * 404 PAGE HEADER SETTINGS.
			 */


			array(
				'id' => 'bauhaus_errorheadingcolor',
				'label' => esc_html__( '404 Page Title color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'typography',
				'std' => '',
				'section' => 'error_page'
			),


			array(
				'id' => 'bauhaus_errorheaderparagraphcolor',
				'label' => esc_html__( '404 Page paragraph/slogan color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'typography',
				'std' => '',
				'section' => 'error_page'
			),


			/**
			 * SEARCH PAGE HEADER SETTINGS.
			 */


			array(
				'id' => 'bauhaus_searchheaderbgcolor',
				'label' => esc_html__( 'Search Pages Heading color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'typography',
				'std' => '',
				'section' => 'search_page'
			),

			array(
				'id' => 'bauhaus_searchheaderpaddingtop',
				'label' => esc_html__( 'Header padding top', 'bauhaus' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'bauhaus' ),
				'std' => '17',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'search_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'bauhaus_searchheaderpaddingbottom',
				'label' => esc_html__( 'Header padding bottom', 'bauhaus' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'bauhaus' ),
				'std' => '14',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'search_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),


			/**
			 * blog/PAGE HEADING COLOR SETTINGS.
			 */
			array(
				'id' => 'bauhaus_blogheadingcolor',
				'label' => esc_html__( 'blog Pages Heading color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'header_color'
			),
			array(
				'id' => 'bauhaus_blogsubtitlecolor',
				'label' => esc_html__( 'blog Pages  post / page title color ', 'bauhaus' ),
				'desc' => esc_html__( 'Please select color', 'bauhaus' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'header_color'
			),


		)
	);
	/* allow settings to be filtered before saving */
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
	/* settings are not the same update the DB */
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}
	/* Lets OptionTree know the UI Builder is being overridden */
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
}
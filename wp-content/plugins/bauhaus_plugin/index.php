<?php
/*
Plugin Name: Bauhaus plugin
Plugin URI:
Description:  extends the capabilities of theme Bauhaus
Version: 1.1.4
Author: VK
Author URI:
License:
*/


add_action( 'vc_before_init', 'bauhaus_name_integrateWithVC' );

function bauhaus_name_integrateWithVC() {
	require plugin_dir_path( __FILE__ ) . '/shortcodes/shortcodes.php';
	require plugin_dir_path( __FILE__ ) . '/VC_custum-data.php';
}


require plugin_dir_path( __FILE__ ) . '/import_demo.php';
require plugin_dir_path( __FILE__ ) . '/css_generator.php';
require plugin_dir_path( __FILE__ ) . '/function.php';
require plugin_dir_path( __FILE__ ) . '/sendmail.php';
require plugin_dir_path( __FILE__ ) . '/custom-style.php';
require plugin_dir_path( __FILE__ ) . '/mailchamp.php';
require plugin_dir_path( __FILE__ ) . '/ot_demo_function.php';
require plugin_dir_path( __FILE__ ) . '/metabox.php';


add_filter( 'body_class', 'bauhaus_add_body_class' );


/**
 * add custom body class
 * @param string $classes
 * @return array
 */
function bauhaus_add_body_class( $classes ) {

	global $post;
	if ( isset( $post->ID ) ) {
		if ( (
			     is_archive()
			     || is_single()
			     || is_page() )
		     &&
		     get_page_template_slug( $post->ID ) != 'template-fullwidth.php'
		) {
			$classes[] = " bauhaus_blog ";
		}

	}

	if ( is_admin_bar_showing() ) {
		$classes[] = " admin_bar_showing ";
	}

	if ( is_404() || is_page( '404-2' ) || is_page( 'comming-soon' ) ) {
		$classes[] = " comming-soon";
	}

	/*	if ( is_home() ) {
			foreach ( $wp_classes as $key => $value ) {
				if ( $value == 'blog' ) {
					unset( $wp_classes[$key] );
				}
			}
		}*/
	if(function_exists('bauhaus_is_header_menu_enable')) {
		if ( bauhaus_is_header_menu_enable() ) {
			$classes[] = "has_navbar";
		}
	}
	return sanitize_html_class( $classes );
}


/**
 *Create the desired tables for theme
 */


add_action( 'init', 'bauhaus_gallery_init' );
/**
 * creat gallery custom type post
 */
function bauhaus_gallery_init() {
	$args = array(
		'label' => esc_html__( 'Projects', 'bauhaus' ),
		'labels' => array(
			'edit_item' => esc_html__( 'Edit', 'bauhaus' ),
			'add_new_item' => esc_html__( 'Add', 'bauhaus' ),
			'view_item' => esc_html__( 'View', 'bauhaus' ),
		),
		'singular_label' => esc_html__( 'Project', 'bauhaus' ),
		'has_archive' => true,
		'public' => true,
		'show_ui' => true,
		'_builtin' => false,
		'_edit_link' => 'post.php?post=%d',
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array( "slug" => "projects" ), // формат ссылок
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon' => 'dashicons-groups'
	);
	$args['label'] = esc_html__( 'Project', 'bauhaus' );
	$args['singular_label'] = esc_html__( 'Item', 'bauhaus' );
	register_post_type( 'projects', $args );
	register_taxonomy(
		'projects_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'projects',         //post type name
		array(
			'hierarchical' => true,
			'label' => esc_html__( 'Categories', 'bauhaus' ),  //Display name
			'query_var' => true,
			'rewrite' => array( 'slug' => 'project' )
		)
	);
}


//add_action( 'wp_footer', 'bauhaus_modal_boddy' );
function bauhaus_modal_boddy() {
	?>
    <!-- Modals -->

    <div id="request" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal"
                          aria-label="<?php echo esc_html__( 'Close', 'bauhaus' ); ?>">&times;</span>
                    <h2 class="modal-title">
						<?php echo wp_kses_post( get_theme_mod( 'bauhaus_c_form_s_modal_title', esc_html__( 'Get start', 'bauhaus' ) ) );

						?>  </h2>
                    <p class="modal-info"><?php echo wp_kses_post( get_theme_mod( "bauhaus_c_form_s_modal_description", "bauhaus" ) ); ?></p>
                </div>
                <div class="modal-body">
					<?php
					$bauhaus_type_sidebar = sanitize_text_field( get_post_meta( get_the_ID(), '_bauhaus_type_sidebar', true ) );
					if ( $bauhaus_type_sidebar == 2 ) {

						if ( function_exists( 'bauhaus_contact_form_architecture_func' ) ) {

							echo str_replace( 'col-md-10 col-md-offset-1', '', do_shortcode( get_theme_mod( 'bauhaus_c_form_s_architecture_val', '[bauhaus_contact_form_architecture]' ) ) );

						} else {

							$atts = array(
								'items' => '',
								'name' => esc_html__( 'Name ', 'bauhaus' ),
								'Email' => esc_html__( 'Email *', 'bauhaus' ),
								'sm' => esc_html__( 'Get start', 'bauhaus' ),
								'message' => esc_html__( 'Message', 'bauhaus' ),
								'smh' => esc_html__( 'Get start', 'bauhaus' ),

							);
							extract( $atts );
							?>
                            <form class="form-request js-ajax-form">
                                <div class="form-group">
                                    <input type="text" name="name" required
                                           placeholder="<?php echo esc_attr( $name ); ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required
                                           placeholder="<?php echo esc_attr( $Email ); ?>">
                                </div>
                                <div class="form-group">
                            <textarea rows="3" name="message"
                                      placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-block"
                                            data-text-hover="<?php echo esc_attr( $smh ); ?>">
                                        <span class="btn-text"><?php echo esc_html( $sm ); ?></span>
                                        <span class="line-top">
                            <span class="line-square-l-t line-square"></span>
                            <span class="line-square-r-t line-square"></span>
                          </span>
                                        <span class="line-bottom">
                            <span class="line-square-l-b line-square"></span>
                            <span class="line-square-r-b line-square"></span>
                          </span>
                                    </button>
                                </div>
                            </form>
							<?php
						}
					} elseif ( $bauhaus_type_sidebar == 3 ) {
						if ( function_exists( 'bauhaus_contact_form_interior_func' ) ) {

							echo str_replace( 'col-md-10 col-md-offset-1', '', do_shortcode( get_theme_mod( 'bauhaus_c_form_s_interior_val', '[bauhaus_contact_form_interior]' ) ) );

						} else {

							$atts = array(
								'items' => '',
								'name' => esc_html__( 'Name ', 'bauhaus' ),
								'Email' => esc_html__( 'Email *', 'bauhaus' ),
								'sm' => esc_html__( 'Get start', 'bauhaus' ),
								'message' => esc_html__( 'Message', 'bauhaus' ),
								'smh' => esc_html__( 'Get start', 'bauhaus' ),

							);
							extract( $atts );
							?>
                            <form class="form-request js-ajax-form">
                                <div class="form-group">
                                    <input type="text" name="name" required
                                           placeholder="<?php echo esc_attr( $name ); ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required
                                           placeholder="<?php echo esc_attr( $Email ); ?>">
                                </div>
                                <div class="form-group">
                            <textarea rows="3" name="message"
                                      placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-block"
                                            data-text-hover="<?php echo esc_attr( $smh ); ?>">
                                        <span class="btn-text"><?php echo esc_html( $sm ); ?></span>
                                        <span class="line-top">
                            <span class="line-square-l-t line-square"></span>
                            <span class="line-square-r-t line-square"></span>
                          </span>
                                        <span class="line-bottom">
                            <span class="line-square-l-b line-square"></span>
                            <span class="line-square-r-b line-square"></span>
                          </span>
                                    </button>
                                </div>
                            </form>
							<?php
						}
					} else {
						if ( function_exists( 'bauhaus_contact_form_func' ) ) {

							echo str_replace( 'col-md-10 col-md-offset-1', '', do_shortcode( get_theme_mod( 'bauhaus_c_form_s_val', '[bauhaus_contact_form]' ) ) );

						} else {

							$atts = array(
								'items' => '',
								'name' => esc_html__( 'Name ', 'bauhaus' ),
								'Email' => esc_html__( 'Email *', 'bauhaus' ),
								'sm' => esc_html__( 'Get start', 'bauhaus' ),
								'message' => esc_html__( 'Message', 'bauhaus' ),
								'smh' => esc_html__( 'Get start', 'bauhaus' ),

							);
							extract( $atts );
							?>
                            <form class="form-request js-ajax-form">
                                <div class="form-group">
                                    <input type="text" name="name" required
                                           placeholder="<?php echo esc_attr( $name ); ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required
                                           placeholder="<?php echo esc_attr( $Email ); ?>">
                                </div>
                                <div class="form-group">
                            <textarea rows="3" name="message"
                                      placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-block"
                                            data-text-hover="<?php echo esc_attr( $smh ); ?>">
                                        <span class="btn-text"><?php echo esc_html( $sm ); ?></span>
                                        <span class="line-top">
                            <span class="line-square-l-t line-square"></span>
                            <span class="line-square-r-t line-square"></span>
                          </span>
                                        <span class="line-bottom">
                            <span class="line-square-l-b line-square"></span>
                            <span class="line-square-r-b line-square"></span>
                          </span>
                                    </button>
                                </div>
                            </form>
							<?php
						}
					}
					?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals success -->
	<?php
}

add_shortcode( 'bauhaus_social_links', 'bauhaus_social_links_function' );


function bauhaus_social_links_function( $atts ) {
	$atts = shortcode_atts(
		array(
			'url' => '#',
			'class' => '',
		), $atts
	);
	ob_start();
	?>


    <a class="<?php echo wp_kses_post( $atts['class'] ) ?>" href="<?php echo esc_url( $atts['url'] ); ?>"></a>
	<?php
	return ob_get_clean();
}


/**
 * image meta box
 */

add_action( 'add_meta_boxes', 'bauhaus_image_add_metabox' );
function bauhaus_image_add_metabox() {

	add_meta_box( 'bauhausimagediv', esc_html__( 'bauhaus Image', 'bauhaus' ),
		'bauhaus_image_metabox', 'post', 'side', 'low' );

}

function bauhaus_image_metabox( $post ) {
	global $content_width, $_wp_additional_image_sizes;
	$image_id = get_post_meta( $post->ID, '_bauhaus_image_id', true );
	$old_content_width = $content_width;
	$content_width = 254;
	if ( $image_id && get_post( $image_id ) ) {

		if ( !isset( $_wp_additional_image_sizes['post-thumbnail'] ) ) {
			echo wp_kses_post( wp_get_attachment_image( $image_id, array( $content_width, $content_width ) ) );
		} else {
			echo wp_kses_post( wp_get_attachment_image( $image_id, 'post-thumbnail' ) );
			$thumbnail_html = wp_get_attachment_image( $image_id, 'post-thumbnail' );
		}
		if ( !empty( $thumbnail_html ) ) {

			?>
            <p class="hide-if-no-js">
                <a href="javascript:;"
                   id="remove_bauhaus_image_button">
					<?php esc_html_e( 'Remove bauhaus image', 'bauhaus' ); ?>
                </a>
            </p>

            <input type="hidden"
                   id="upload_bauhaus_image"
                   name="_bauhaus_cover_image"
                   value="<?php echo esc_attr( $image_id ); ?>"/>
			<?php
		}
		$content_width = $old_content_width;
	} else {
		?>
        <img src=""
             style="width:<?php echo esc_attr( $content_width ); ?>'px;height:auto;border:0;
                     display:none;"/>

        <p class="hide-if-no-js">
            <a title="<?php esc_html_e( 'Set bauhaus image', 'bauhaus' ); ?>"
               href="javascript:;"
               id="upload_bauhaus_image_button"
               id="set-bauhaus-image<?php echo esc_html__( 'Choose an image', 'bauhaus' ) ?>"
               data-uploader_button_text="<?php echo esc_html__( 'Set bauhaus image', 'bauhaus' ) ?>"><?php
				echo esc_html__( 'Set bauhaus image', 'bauhaus' ); ?></a>
        </p>
        <input type="hidden" id="upload_bauhaus_image" name="_bauhaus_cover_image" value=""/>
		<?php

	}

}

add_action( 'save_post', 'bauhaus_image_save', 10, 1 );
function bauhaus_image_save( $post_id ) {
	if ( isset( $_POST['_bauhaus_cover_image'] ) ) {
		$image_id = (int) $_POST['_bauhaus_cover_image'];
		update_post_meta( $post_id, '_bauhaus_image_id', $image_id );
	}
}


function bauhaus_fiu_upload_file() {

	$uploadedfile = $_FILES[0];
	// upload resume
	$movefile = wp_handle_sideload( $uploadedfile, array( 'test_form' => FALSE ) );

	if ( isset( $movefile['file']{1} ) ) {

		$to = sanitize_email( get_option( 'admin_email' ) );
		if ( strlen( get_theme_mod( 'bauhaus_mail_email' ) ) > 4 ) {
			$to = sanitize_email( get_theme_mod( 'bauhaus_mail_email' ) );
		}

		$name = esc_html__( 'New resume', 'bauhaus' );
		$headers[] = "From: {$name}  <    {$to} >";
		// send file to email
		$send = wp_mail( $to, sanitize_text_field( esc_html__( 'New resume', 'bauhaus' ) ), esc_html__( 'New resume', 'bauhaus' ), $headers, array( $movefile['file'] ) );

		// delete file
		unlink( $movefile['file'] );

		if ( $send ) {
			echo 1;
		} else {
			echo 0;

		}
	}

	exit();
}

add_action( 'wp_ajax_bauhaus_fiu_upload_file', 'bauhaus_fiu_upload_file' );
add_action( 'wp_ajax_nopriv_bauhaus_fiu_upload_file', 'bauhaus_fiu_upload_file' );


// translation
add_action( 'bauhaus-before-menu', 'bauhaus_before_menu_fn' );
function bauhaus_before_menu_fn() {

	?>
    <div class="menu-lang right-boxed lang_sw">
		<?php if ( function_exists( 'ot_get_option' ) ) {
			echo do_shortcode( ot_get_option( 'bauhaus_multilanguage' ) );
		} ?>


    </div>
	<?php
}

add_action( 'bauhaus-after-footer-menu', 'bauhaus_after_footer_menu_fn' );
function bauhaus_after_footer_menu_fn() {
	if ( function_exists( 'ot_get_option' ) ) {
		?>
        <div class="flex-item lang_sw">
			<?php echo do_shortcode( ot_get_option( 'bauhaus_multilanguage_footer' ) );
			?>
        </div>
		<?php
	}
}


function bauhaus_add_excerpt_support_for_cpt() {
	add_post_type_support( 'projects', 'excerpt' );
}

add_action( 'init', 'bauhaus_add_excerpt_support_for_cpt' );
<?php


add_action( 'add_meta_boxes', 'bauhaus_custom_meta_box' );

function bauhaus_custom_meta_box( $postType ) {

	$postType = ( isset( $postType ) ) ? $postType : "post";
	add_meta_box( 'bauhaus_meta_box',
		esc_html__( 'Bauhaus Page Options', 'bauhaus' ),
		'bauhaus_footer_meta_box',
		'page',
		'side',
		'low' );
	add_meta_box( 'bauhaus_meta_box',
		esc_html__( 'Bauhaus Page Options', 'bauhaus' ),
		'bauhaus_footer_meta_box',
		'post',
		'side',
		'low' );



	add_meta_box( 'bauhaus_meta_box',
		esc_html__( 'bauhaus portfolio', 'bauhaus' ),
		'bauhaus_portfolio_box_func',
		'portfolio',
		'side',
		'low' );
}




add_action( 'save_post', 'bauhaus_save_metabox', 9999 );

function bauhaus_save_metabox( $post_id ) {
	global $post;


	if ( !empty( $_POST['bauhaus_sidebar_pos'] ) ) {
		update_post_meta( $post_id, '_bauhaus_sidebar_pos', wp_kses_post( $_POST['bauhaus_sidebar_pos'] ) );

	} else {
		delete_post_meta( $post_id, '_bauhaus_sidebar_pos');
	}







	if ( !empty( $_POST['_bauhaus_short_description'] ) ) {
		$datta = wp_kses_post( $_POST['_bauhaus_short_description'] );
		update_post_meta( $post_id, '_bauhaus_short_description', $datta );

	}

	if ( !current_user_can( 'edit_page', $post_id ) ) {
		return $post_id;
	}

	if ( isset( $post->ID ) ) {
		if ( isset( $_POST["bauhaus_menu_name"] ) ) {
			$meta_element_class = serialize( $_POST['bauhaus_menu_name'] );
			update_post_meta( $post->ID, '_bauhaus_menu_name', ( $meta_element_class ) );
		} else {
			delete_post_meta( $post->ID, '_bauhaus_menu_name' );
		}
		if ( isset( $_POST["bauhaus_munu_url"] ) ) {
			$meta_element_class = serialize( $_POST['bauhaus_munu_url'] );
			update_post_meta( $post->ID, '_bauhaus_munu_url', ( $meta_element_class ) );
		} else {
			delete_post_meta( $post->ID, '_bauhaus_munu_url' );
		}

		$frontpage_id = get_option( 'page_on_front' );
		$contents = unserialize( get_post_meta( $post->ID, '_bauhaus_menu_name', true ) );
		$socialurl = unserialize( get_post_meta( $post->ID, '_bauhaus_munu_url', true ) );
		if ( $post->ID == $frontpage_id ) {


			$menu = '';
			if ( ( $contents && $socialurl ) != '' ) {
				foreach ( array_combine( $contents, $socialurl ) as $content => $url ) {
					$menu .= ' 	<li><a href="' . esc_url( $url ) . '">' . esc_html( $content ) . '</a></li>';
				}
			}
			if ( $menu != '' ) {
				update_option( 'bauhaus_one_page_menu', $menu );

			} else {
				delete_option( 'bauhaus_one_page_menu');
			}

		} else {
			/*
			 * onother page
			 */
			$menu_o = '';
			if ( ( $contents && $socialurl ) != '' ) {
				foreach ( array_combine( $contents, $socialurl ) as $content => $url ) {
					$menu_o .= ' 	<li><a href="' . esc_url( $url ) . '">' . esc_html( $content ) . '</a></li>';
				}
			}
			if ( $menu_o != '' ) {
				update_option( 'bauhaus_one_page_menu_' . $post->ID, $menu_o );
			} else {
				delete_option( 'bauhaus_one_page_menu_' . $post->ID);
			}

		}

	}


}


function bauhaus_footer_meta_box( $post ) {

	$bauhaus_munu_url = unserialize( get_post_meta( $post->ID, '_bauhaus_munu_url', true ) );
	$bauhaus_menu_name = unserialize( get_post_meta( $post->ID, '_bauhaus_menu_name', true ) );

	$bauhaus_sidebar_pos = sanitize_text_field ( get_post_meta( $post->ID, '_bauhaus_sidebar_pos', true ) );

	$bauhaus_type_header = sanitize_text_field ( get_post_meta( $post->ID, '_bauhaus_type_header', true ) );
	$bauhaus_type_sidebar = sanitize_text_field ( get_post_meta( $post->ID, '_bauhaus_type_sidebar', true ) );


	?>
	<p class="post-attributes-label-wrapper">
		<label class="post-attributes-label" for="bauhaus_sidebar_pos"><?php  esc_html_e('Select Sidebar position ','bauhaus'); ?></label></p>
	<select name="bauhaus_sidebar_pos" id="bauhaus_sidebar_pos">

		<option class="level-0"  <?php  selected($bauhaus_sidebar_pos,'right'); ?> value="right"><?php  esc_html_e('right','bauhaus'); ?>

		</option>
		<option class="level-0" <?php  selected($bauhaus_sidebar_pos,'left'); ?> value="left"><?php  esc_html_e('left','bauhaus'); ?></option>

		<option class="level-0" <?php  selected($bauhaus_sidebar_pos,'none'); ?> value="none"><?php  esc_html_e('no sidebar','bauhaus'); ?></option>
	</select>
	<hr>




	<?php
}







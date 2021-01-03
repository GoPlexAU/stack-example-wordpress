<?php


/**
 * This function via Ajax sends a post mail
 */
function virgo_mail_send() {
	if ( isset( $_POST['email'] ) && isset( $_POST['name'] ) && isset( $_POST['message'] ) ) {

		// detect & prevent header injections
		$test = "/(content-type|bcc:|cc:|to:)/i";
		foreach ( $_POST as $key => $val ) {
			if ( preg_match( $test, $val ) ) {
				exit;
			}
		}


		$to = sanitize_email( get_option( 'admin_email' ) );
		if ( strlen( get_theme_mod( 'bauhaus_mail_email' ) ) > 4 ) {
			$to = sanitize_email( get_theme_mod( 'bauhaus_mail_email' ) );
		}
		$email = sanitize_text_field( $_POST['email'] );
		$name = sanitize_text_field( $_POST['name'] );
		$headers[] = "From: {$name} {$email} <    {$to} >";
		$messages = " ";
		if ( isset( $_POST['message']{1} ) ) {
			$messages = wp_kses_post( $_POST['message'] );
		}
		$send = wp_mail( $to, sanitize_text_field( $_POST['name'] ), $messages, $headers );


		if ( $send ) {
			echo 1;
		} else {
			echo 0;

		}

	}
	wp_die();
	exit;
}

add_action( 'wp_ajax_virgo_mail_send', 'virgo_mail_send' ); // for logged in user
add_action( 'wp_ajax_nopriv_virgo_mail_send', 'virgo_mail_send' ); // if user not logged in


?>
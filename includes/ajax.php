<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Feedback.
 */
add_actions( array(
	'wp_ajax_feedback',
	'wp_ajax_nopriv_feedback',
), function () {
	if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
		header( 'Allow: POST' );
		header( 'HTTP/1.1 405 Method Not Allowed' );
		header( 'Content-Type: text/plain' );
		exit;
	}

	// post variables
	$post_name    = isset( $_POST['name'] ) ? trim( $_POST['name'] ) : '';
	$post_email   = isset( $_POST['email'] ) ? trim( $_POST['email'] ) : '';
	$post_phone   = isset( $_POST['phone'] ) ? trim( $_POST['phone'] ) : '';
	$post_message = isset( $_POST['message'] ) ? trim( $_POST['message'] ) : '';
	if ( ! $post_name || ! $post_email || ! $post_message ) {
		echo json_encode( array(
			'error'   => true,
			'message' => '',
		) );
		die;
	}

	// mail variables
	$to      = get_option( 'admin_email' );
	$subject = __( 'Feedback form', THEME_NAME );

	$message   = array();
	$message[] = sprintf( '<p>Name: %s</p>', $post_name );
	$message[] = sprintf( '<p>Email: %s</p>', $post_email );
	$message[] = sprintf( '<p>Phone: %s</p>', $post_phone );
	$message[] = sprintf( '<p>Message: %s</p>', $post_message );
	$message   = join( "\n", $message );

	// mail headers
	$headers   = array();
	$headers[] = strtr( 'From: :name <:email>', array(
		':name'  => $_SERVER['SERVER_NAME'],
		':email' => 'no-reply@' . $_SERVER['SERVER_NAME'],
	) );
	$headers[] = 'Content-Type: text/html; charset=UTF-8';

	// mail sending
	wp_mail( $to, $subject, $message, $headers );

	echo json_encode( array(
		'success' => true,
		'message' => __('感谢您提交的意见和建议，我们将尽快回复！'),
	) );
	die;
} );

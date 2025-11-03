<?php

session_start();

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['token'], $_POST['name'], $_POST['email'], $_POST['message'], $_POST['url'] ) && hash_equals( $_SESSION['contact_token'], $_POST['token'] ) && ( $_POST['url'] == 'https://example.com/' ) && ( stripos( $_POST['message'], 'http' ) === false ) && filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) && !empty( trim( $_POST['name'] ) ) && !empty( trim( $_POST['message'] ) ) ) {

$to      = 'email@example.com';
$subject = 'New Message from Company Name';
$name    = str_replace( array( "\r", "\n" ), '', trim( stripslashes( htmlspecialchars( $_POST['name'], ENT_QUOTES, 'UTF-8' ) ) ) );
$email   = str_replace( array( "\r", "\n" ), '', trim( stripslashes( htmlspecialchars( $_POST['email'], ENT_QUOTES, 'UTF-8' ) ) ) );
$phone   = str_replace( array( "\r", "\n" ), '', trim( stripslashes( htmlspecialchars( $_POST['phone'], ENT_QUOTES, 'UTF-8' ) ) ) );
$message = trim( stripslashes( htmlspecialchars( $_POST['message'], ENT_QUOTES, 'UTF-8' ) ) );
$body  = '';
$body .= 'Name: ';
$body .= htmlspecialchars_decode( $name );
$body .= "\n";
$body .= 'Email: ';
$body .= $email;
if ( $phone ) {
$body .= "\n";
$body .= 'Phone: ';
$body .= $phone;
}
$body .= "\n\n";
$body .= htmlspecialchars_decode( $message );
$body .= "\n";
$headers  = "From: $name <$email>\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$success  = mail( $to, $subject, $body, $headers );
 
if ( $success ) {
unset( $_SESSION['contact_token'] );
header( 'Location: success' );
exit;
} else {
header( 'Location: fail' );
exit;
}

} else {
header( 'Location: fail' );
exit;
}

?>
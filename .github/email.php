<?php

if ( ( $_POST['url'] == 'https://example.com/' ) && ( stripos( $_POST['message'], 'http' ) === false ) ) {

$to      = 'email@example.com';
$subject = 'New Message from Company Name';
$name    = trim( stripslashes( htmlspecialchars( $_POST['sign'] ) ) );
$email   = trim( stripslashes( htmlspecialchars( $_POST['email'] ) ) );
$phone   = trim( stripslashes( htmlspecialchars( $_POST['phone'] ) ) );
$message = trim( stripslashes( htmlspecialchars( $_POST['message'] ) ) );

$validated = true;

if ( !$validated ) {
print '<meta http-equiv="refresh" content="0;url=fail" />';
exit;
}

$body  = '';
$body .= 'Name: ';
$body .= htmlspecialchars_decode( $name );
$body .= "\n";
$body .= 'Email: ';
$body .= $email;
if ( $_POST['phone'] ) {
$body .= "\n";
$body .= 'Phone: ';
$body .= $phone;
}
$body .= "\n\n";
$body .= htmlspecialchars_decode( $message );
$body .= "\n";
 
$success = mail( $to, $subject, $body, "From: $name <$email>" );
 
if ( $success ) {
print '<meta http-equiv="refresh" content="0;url=success" />';
} else {
print '<meta http-equiv="refresh" content="0;url=fail" />';
}

}

?>
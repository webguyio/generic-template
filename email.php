<?php

if ( $_POST['url'] == 'https://example.com/' ) {

$to      = 'email@example.com';
$subject = 'Inquiry | Company Name';
$name    = trim( stripslashes( htmlspecialchars( $_POST['sign'] ) ) );
$email   = trim( stripslashes( htmlspecialchars( $_POST['email'] ) ) );
$phone   = trim( stripslashes( htmlspecialchars( $_POST['phone'] ) ) );
$message = trim( stripslashes( htmlspecialchars( $_POST['message'] ) ) );

$validated = true;

if ( !$validated ) {
print '<meta http-equiv="refresh" content="0;url=fail" />';
exit;
}

$body  = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
$body .= "\n";
$body .= "Phone: ";
$body .= $phone;
$body .= "\n\n";
$body .= $message;
$body .= "\n";
 
$success = mail( $to, $subject, $body, "From: <$email>" );
 
if ( $success ) {
print '<meta http-equiv="refresh" content="0;url=success" />';
} else {
print '<meta http-equiv="refresh" content="0;url=fail" />';
}

}

?>
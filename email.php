<?php

if ( $_POST['url'] == 'https://example.com/' ) {

$to      = 'email@example.com';
$subject = 'Inquiry | Company Name';
$name    = trim( stripslashes( $_POST['name'] ) );
$phone   = trim( stripslashes( $_POST['phone'] ) );
$email   = trim( stripslashes( $_POST['email'] ) );
$message = trim( stripslashes( $_POST['message'] ) );

$validated = true;

if ( !$validated ) {
print '<meta http-equiv="refresh" content="0;url=fail" />';
exit;
}

$body  = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n";
$body .= "Phone: ";
$body .= $phone;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
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
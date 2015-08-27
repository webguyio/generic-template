<?php

if ( $_POST['url'] == 'http://' ) {

$EmailFrom = Trim( stripslashes( $_POST['EmailFrom'] ) );
$EmailTo = "email@website.com";
$Subject = "Inquiry | Company Name";
$name = Trim( stripslashes( $_POST['name'] ) );
$phone = Trim( stripslashes( $_POST['phone'] ) );
$message = Trim( stripslashes( $_POST['message'] ) );

$validationOK=true;
if ( !$validationOK ) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=fail\">";
exit;
}

$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
$success = mail( $EmailTo, $Subject, $Body, "From: <$EmailFrom>" );
 
if ( $success ) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=success\">";
} else {
print "<meta http-equiv=\"refresh\" content=\"0;URL=fail\">";
}

}

?>
<?php
session_start();
if ( empty( $_SESSION['contact_token'] ) ) {
$_SESSION['contact_token'] = bin2hex( random_bytes( 32 ) );
}

define( 'page_title', 'Contact' );
define( 'page_description', 'Page description for search engines here.' );
define( 'page_keywords', 'keywords, for, search engines, here' );
define( 'page_id', 'contact' );
define( 'page_index', '<meta name="robots" content="index">' );
include( 'header.php' );
?>

<script>
function nospam() {
var message = document.forms["contact-form"]["message"].value;
var comment = document.getElementById("comment");
var link = message.indexOf("http");
if (link > -1) {
comment.setCustomValidity("Links are welcome, but please remove the https:// portion of them.");
comment.reportValidity();
} else {
comment.setCustomValidity("");
comment.reportValidity();
}
}
</script>

<form id="contact-form" name="contact-form" method="post" action="email.php">
<input type="hidden" name="token" value="<?php echo safe( $_SESSION['contact_token'], 'attr' ); ?>">
<p id="name"><label for="name-input" class="visually-hidden">Name</label><input type="text" id="name-input" name="name" placeholder="Name" autocomplete="off" required></p>
<p id="email"><label for="email-input" class="visually-hidden">Email</label><input type="email" id="email-input" name="email" placeholder="Email" autocomplete="off" required></p>
<p id="phone"><label for="phone-input" class="visually-hidden">Phone</label><input type="tel" id="phone-input" name="phone" placeholder="Phone (optional)" autocomplete="off"></p>
<p id="url"><input type="url" name="url" placeholder="URL" value="https://example.com/" autocomplete="off" tabindex="-1" required></p>
<p id="message"><label for="comment" class="visually-hidden">Message</label><textarea id="comment" name="message" placeholder="Message" onkeyup="nospam()" required></textarea></p>
<p id="submit"><input type="submit" value="Submit"></p>
</form>

<?php include( 'footer.php' ); ?>
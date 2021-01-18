<?php
define( 'page_title', 'Contact' );
define( 'page_description', 'Page description for search engines here.' );
define( 'page_keywords', 'keywords, for, search engines, here' );
define( 'page_id', 'contact' );
define( 'page_index', '<meta name="robots" content="index" />' );
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
<p id="name"><input type="text" name="sign" placeholder="Name" autocomplete="off" size="35" required /></p>
<p id="email"><input type="email" name="email" placeholder="Email" autocomplete="off" size="35" required /></p>
<p id="phone"><input type="tel" name="phone" placeholder="Phone (optional)" autocomplete="off" size="35" /></p>
<p id="url"><input type="url" name="url" placeholder="URL" value="https://example.com/" autocomplete="off" tabindex="-1" size="35" required /></p>
<p id="message"><textarea id="comment" name="message" placeholder="Message" rows="5" cols="100" onkeyup="nospam()"></textarea></p>
<p id="submit"><input type="submit" value="Submit" /></p>
</form>

<?php include( 'footer.php' ); ?>
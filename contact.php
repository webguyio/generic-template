<?php
define( 'title', 'Contact' );
define( 'description', 'Page description for search engines here.' );
define( 'keywords', 'keywords, for, search engines, here' );
define( 'pageid', 'contact' );
define( 'index', '<meta name="robots" content="index" />' );
include( 'header.php' );
?>

<form method="post" action="email.php">
<p>Name:<br /><input type="text" name="name" size="35" /></p>
<p>Phone:<br /><input type="tel" name="phone" size="35" /></p>
<p>Email:<br /><input type="email" name="email" size="35" required /></p>
<p class="url">URL:<br /><input type="url" name="url" value="https://example.com/" size="35" class="url" /></p>
<p>Message:<br /><textarea name="message" rows="5" cols="100" id="comment"></textarea></p>
<p><input type="submit" value="Submit" class="button" /></p>
</form>

<?php include( 'footer.php' ); ?>
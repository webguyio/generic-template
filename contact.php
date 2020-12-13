<?php
define( 'title', 'Contact' );
define( 'description', 'Page description for search engines here.' );
define( 'keywords', 'keywords, for, search engines, here' );
define( 'pageid', 'contact' );
define( 'index', '<meta name="robots" content="index" />' );
include( 'header.php' );
?>

<form method="post" action="email.php">
<p id="name"><input type="text" name="sign" placeholder="Name" autocomplete="off" size="35" required /></p>
<p id="email"><input type="email" name="email" placeholder="Email" autocomplete="off" size="35" required /></p>
<p id="phone"><input type="tel" name="phone" placeholder="Phone (optional)" autocomplete="off" size="35" /></p>
<p id="url"><input type="url" name="url" placeholder="URL" value="https://example.com/" autocomplete="off" tabindex="-1" size="35" required /></p>
<p id="message"><textarea id="comment" name="message" placeholder="Message" rows="5" cols="100"></textarea></p>
<p id="submit"><input type="submit" value="Submit" /></p>
</form>

<?php include( 'footer.php' ); ?>
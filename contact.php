<?php define( 'title', 'Contact' ); ?>
<?php define( 'description', 'Page description for search engines here.' ); ?>
<?php define( 'keywords', 'keywords, for, search engines, here' ); ?>
<?php define( 'pageid', 'contact' ); ?>
<?php include( 'header.php' ); ?>

<form action="contact-actions.php" method="post">
<p>Name:<br /><input size="25" name="name" type="text" /></p>
<p>Phone:<br /><input size="25" name="phone" type="text" /></p>
<p>Email:<br /><input size="25" name="EmailFrom" type="text" /></p>
<p class="url">URL:<br /><input size="25" name="url" type="text" value="http://" class="url" id="url" /></p>
<p>Message:<br /><textarea name="message" rows="5" cols="80" id="comment"></textarea></p>
<p><input type="submit" value="Submit" class="button" /></p>
</form>

<?php include( 'footer.php' ); ?>
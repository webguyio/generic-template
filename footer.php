</article>

</main>

<?php include( 'sidebar.php' ); ?>

</div>

<footer id="footer" role="contentinfo">

<div id="social">

<a href="https://www.facebook.com/<?php echo social_username; ?>/" title="Facebook" rel="me" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/fb.svg)" title="Facebook" itemprop="image"></i></a>
<a href="https://twitter.com/<?php echo social_username; ?>" title="Twitter" rel="me" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/tw.svg)" title="Twitter" itemprop="image"></i></a>
<a href="https://www.instagram.com/<?php echo social_username; ?>/" title="Instagram" rel="me" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/ig.svg)" title="Instagram" itemprop="image"></i></a>
<a href="https://www.pinterest.com/<?php echo social_username; ?>/" title="Pinterest" rel="me" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/pn.svg)" title="Pinterest" itemprop="image"></i></a>
<a href="https://www.youtube.com/<?php echo social_username; ?>" title="YouTube" rel="me" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/yt.svg)" title="YouTube" itemprop="image"></i></a>

</div>

<div id="copyright">

&copy; <?php echo date( 'Y' ); ?> <?php echo site_title; ?>

</div>

</footer>

</div>

<script>
jQuery(document).ready(function($) {
$(".menu-toggle").on("keypress click", function(e) {
if (e.which == 13 || e.type === "click") {
e.preventDefault();
$("#menu").toggleClass("toggled");
}
});
$(document).keyup(function(e) {
if (e.keyCode == 27) {
if ($("#menu").hasClass("toggled")) {
$("#menu").toggleClass("toggled");
}
}
});
$("a").not("a:has(img)").each(function() {
var a = new RegExp("/" + window.location.host + "/");
if(!a.test(this.href)) {
$(this).click(function(event) {
event.preventDefault();
event.stopPropagation();
window.open(this.href, "_blank");
});
}
});
});
</script>

</body>

</html>
</article>

</main>

<?php include( 'sidebar.php' ); ?>

</div>

<footer id="footer">

<div id="social">

<a href="https://www.facebook.com/example/" title="Facebook" rel="me" target="_blank"><img src="images/fb.svg" alt="Facebook" /></a>
<a href="https://twitter.com/example" title="Twitter" rel="me" target="_blank"><img src="images/tw.svg" alt="Twitter" /></a>
<a href="https://www.instagram.com/example/" title="Instagram" rel="me" target="_blank"><img src="images/ig.svg" alt="Instagram" /></a>
<a href="https://www.pinterest.com/example/" title="Pinterest" rel="me" target="_blank"><img src="images/pn.svg" alt="Pinterest" /></a>
<a href="https://www.youtube.com/example" title="YouTube" rel="me" target="_blank"><img src="images/yt.svg" alt="YouTube" /></a>

</div>

<div id="copyright">

&copy; <?php echo date( 'Y' ); ?> Company Name

</div>

</footer>

</div>

<script>
jQuery(document).ready(function($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
$(":checkbox").on("click", function() {
$(this).parent().toggleClass("checked");
});
$("img[src$='.svg']").each(function () {
var $img = $(this);
var imgURL = $img.attr("src");
var attributes = $img.prop('attributes');
$.get(imgURL, function (data) {
var $svg = $(data).find("svg");
$svg = $svg.removeAttr("xmlns:a");
$.each(attributes, function () {
$svg.attr(this.name, this.value);
});
$img.replaceWith($svg);
}, "xml");
});
});
</script>

</body>

</html>
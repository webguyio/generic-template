</article>

</main>

<?php include( 'sidebar.php' ); ?>

</div>

<footer id="footer">

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
});
</script>

</body>

</html>
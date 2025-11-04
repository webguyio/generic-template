</article>

</main>

<?php include( 'sidebar.php' ); ?>

</div>

<footer id="footer">

<div id="social">

<a href="https://www.facebook.com/<?php echo social_username; ?>/" title="Facebook" rel="me noopener" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/fb.svg)" title="Facebook" itemprop="image"></i></a>
<a href="https://x.com/<?php echo social_username; ?>" title="X" rel="me noopener" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/tw.svg)" title="X" itemprop="image"></i></a>
<a href="https://www.instagram.com/<?php echo social_username; ?>/" title="Instagram" rel="me noopener" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/ig.svg)" title="Instagram" itemprop="image"></i></a>
<a href="https://www.pinterest.com/<?php echo social_username; ?>/" title="Pinterest" rel="me noopener" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/pn.svg)" title="Pinterest" itemprop="image"></i></a>
<a href="https://www.youtube.com/<?php echo social_username; ?>" title="YouTube" rel="me noopener" target="_blank" itemprop="sameAs"><i class="icon" style="mask:url(images/yt.svg)" title="YouTube" itemprop="image"></i></a>

</div>

<div id="copyright">

&copy; <?php echo date( 'Y' ); ?> <?php echo safe( site_title, 'html' ); ?>

</div>

</footer>

</div>

<script>
document.addEventListener( 'DOMContentLoaded', function() {
const menuToggle = document.querySelector( '.menu-toggle' );
const menu = document.getElementById( 'menu' );
menuToggle.addEventListener( 'click', function() {
menu.classList.toggle( 'toggled' );
} );
document.addEventListener( 'keyup', function( e ) {
if ( e.key === 'Escape' && menu.classList.contains( 'toggled' ) ) {
menu.classList.toggle( 'toggled' );
}
} );
const host = '<?php echo htmlspecialchars( $_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8' ); ?>';
const imageExtensions = /\.(jpg|jpeg|jfif|pjpeg|pjp|png|apng|gif|svg|webp|avif)$/i;
document.querySelectorAll( 'a[href^="http"]' ).forEach( function( link ) {
if ( !link.href.includes( host ) && !imageExtensions.test( link.href ) ) {
link.setAttribute( 'target', '_blank' );
const rel = link.getAttribute( 'rel' ) || '';
link.setAttribute( 'rel', ( rel + ' noopener' ).trim() );
}
} );
reframe( 'iframe, object, embed' );
if ( typeof lucide !== 'undefined' ) {
lucide.createIcons();
}
if ( typeof simpleIcons !== 'undefined' ) {
simpleIcons.replace();
}
} );
</script>

</body>

</html>
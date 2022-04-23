<?php
define( 'site_title', 'Title of Site' );
define( 'site_description', 'Site description here.' );
define( 'site_url', 'https://example.com/' );
define( 'social_username', 'example' );
?>

<!DOCTYPE html>

<html lang="en" itemscope itemtype="https://schema.org/WebPage">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php echo page_description; ?>" />
<meta name="keywords" content="<?php echo page_keywords; ?>" />
<meta property="og:image" content="<?php echo site_url; ?>images/icon.png" />
<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="<?php echo site_title; ?>" />
<meta name="twitter:title" content="<?php echo page_title; ?>" />
<meta name="twitter:description" content="<?php echo page_description; ?>" />
<meta name="twitter:image" content="<?php echo site_url; ?>images/icon.png" />
<meta name="twitter:url" content="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<meta name="twitter:widgets:theme" content="light" />
<meta name="twitter:widgets:link-color" content="blue" />
<meta name="twitter:widgets:border-color" content="#fff" />
<?php echo page_index; ?>

<title><?php echo page_title; ?> | <?php echo site_title; ?></title>

<link rel="icon" href="favicon.ico" sizes="32x32" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<link rel="canonical" href="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<link rel="stylesheet" href="style.css" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/videos.js"></script>
<script>
jQuery(document).ready(function($) {
$("#wrapper").vids();
});
</script>
<script type="application/ld+json">
{
"@context": "https://www.schema.org/",
"@type": "WebSite",
"name": "<?php echo site_title; ?>",
"url": "<?php echo site_url; ?>"
}
</script>
<script type="application/ld+json">
{
"@context": "https://www.schema.org/",
"@type": "Organization",
"name": "<?php echo site_title; ?>",
"url": "<?php echo site_url; ?>",
"sameAs": [
"https://www.facebook.com/<?php echo social_username; ?>/",
"https://twitter.com/<?php echo social_username; ?>"
],
"logo": "<?php echo site_url; ?>images/logo.png",
"image": "<?php echo site_url; ?>images/icon.png",
"description": "<?php echo site_description; ?>"
}
</script>

</head>

<body id="<?php echo page_id; ?>">

<a href="#content" class="button skip-link visually-hidden">Skip to the content</a>

<div id="wrapper" class="hfeed">

<header id="header" role="banner"> 

<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization"><a href="./<?php // echo site_url; ?>" itemprop="url"><meta itemprop="name" content="<?php echo site_title; ?>" /><img src="images/logo.png" alt="<?php echo site_title; ?>" id="logo" itemprop="logo" /></a></div>

<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">

<button type="button" class="menu-toggle"><span class="menu-icon">&#9776;</span><span class="menu-text visually-hidden"> Menu</span></button>

<ul class="xoxo">

<li class="parent"><a href="./<?php // echo site_url; ?>" itemprop="url"><span itemprop="name">Page 1</span></a>
<ul class="sub-menu">
<li><a href="#" class="child" itemprop="url"><span itemprop="name">Dropdown Item 1</span></a></li>
<li><a href="#" class="child" itemprop="url"><span itemprop="name">Dropdown Item 2</span></a></li>
<li><a href="#" class="child" itemprop="url"><span itemprop="name">Dropdown Item 3</span></a></li>
</ul>
</li>
<li><a href="#" itemprop="url"><span itemprop="name">Page 2</span></a></li>
<li><a href="#" itemprop="url"><span itemprop="name">Page 3</span></a></li>
<li><a href="#" itemprop="url"><span itemprop="name">Page 4</span></a></li>
<li><a href="contact" itemprop="url"><span itemprop="name">Contact</span></a></li>

</ul>

</nav>

</header>

<div id="container">

<main id="content" class="hentry" role="main">

<article class="entry-content" itemprop="mainContentOfPage">

<header>

<h1 class="entry-title" itemprop="name"><?php echo page_title; ?></h1>

<div class="share">
<a href="https://www.facebook.com/sharer/sharer.php?t=<?php echo rawurlencode( page_title ); ?>&amp;u=https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" title="Share on Facebook" class="facebook" target="_blank"><span class="icon"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="m22.676 0h-21.352c-.731 0-1.324.593-1.324 1.324v21.352c0 .732.593 1.324 1.324 1.324h11.494v-9.294h-3.129v-3.621h3.129v-2.675c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63h-3.119v9.282h6.115c.733 0 1.325-.592 1.325-1.324v-21.352c0-.731-.592-1.324-1.324-1.324" /></svg></span></a>
<a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode( page_title ); ?>&amp;url=https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" title="Share on Twitter" class="twitter" target="_blank"><span class="icon"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="m23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548z" /></svg></span></a>
<a href="mailto:?subject=<?php echo rawurlencode( page_title ); ?>&amp;body=https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" title="Share over Email" class="email" target="_blank"><span class="icon"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M21.386 2.614H2.614A2.345 2.345 0 0 0 .279 4.961l-.01 14.078a2.353 2.353 0 0 0 2.346 2.347h18.771a2.354 2.354 0 0 0 2.347-2.347V4.961a2.356 2.356 0 0 0-2.347-2.347zm0 4.694L12 13.174 2.614 7.308V4.961L12 10.827l9.386-5.866v2.347z" /></svg></span></a>
<a href="javascript:window.print()" title="Print this Article" class="print"><span class="icon"><svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M18,3H6V7H18M19,12A1,1 0 0,1 18,11A1,1 0 0,1 19,10A1,1 0 0,1 20,11A1,1 0 0,1 19,12M16,19H8V14H16M19,8H5A3,3 0 0,0 2,11V17H6V21H18V17H22V11A3,3 0 0,0 19,8Z" /></svg></span></a>
</div>

</header>
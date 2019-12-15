<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php echo description; ?>" />
<meta name="keywords" content="<?php echo keywords; ?>" />
<meta property="og:image" content="https://example.com/images/icon.png" />
<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="Company Name" />
<meta name="twitter:title" content="<?php echo title; ?>" />
<meta name="twitter:description" content="<?php echo description; ?>" />
<meta name="twitter:image" content="https://example.com/images/icon.png" />
<meta name="twitter:url" content="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<?php echo index; ?>

<title><?php echo title; ?> | Company Name</title>

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="canonical" href="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<link rel="stylesheet" href="style.css" />

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/videos.js"></script>
<script>
jQuery(document).ready(function($){
$('#wrapper').vids();
});
</script>
<script type='application/ld+json'> 
{
"@context": "https://www.schema.org/",
"@type": "WebSite",
"name": "Company Name",
"url": "https://example.com/"
}
</script>
<script type='application/ld+json'> 
{
"@context": "https://www.schema.org/",
"@type": "Organization",
"name": "Company Name",
"url": "https://example.com/",
"sameAs": [
"https://www.facebook.com/example/",
"https://twitter.com/example"
],
"logo": "https://example.com/images/logo.png",
"image": "https://example.com/images/icon.png",
"description": "Description of Website"
}
</script>

</head>

<body id="<?php echo pageid; ?>">

<a href="#content" class="button visually-hidden">Skip to the content</a>

<div id="wrapper" class="hfeed">

<header id="header" role="banner"> 

<div id="site-title"><a href="./">Company Name<!-- <img src="images/logo.png" alt="Company Name" id="logo" /> --></a></div>

<nav id="menu" role="navigation">

<button type="button" class="menu-toggle"><span class="menu-icon">&#9776;</span><span class="menu-text visually-hidden"> Menu</span></button>

<ul class="xoxo">

<li class="parent"><a href="./">Page 1</a>
<ul class="sub-menu">
<li><a href="#" class="child">Dropdown Item 1</a></li>
<li><a href="#" class="child">Dropdown Item 2</a></li>
<li><a href="#" class="child">Dropdown Item 3</a></li>
</ul>
</li>
<li><a href="#">Page 2</a></li>
<li><a href="#">Page 3</a></li>
<li><a href="#">Page 4</a></li>
<li><a href="contact">Contact</a></li>

</ul>

</nav>

</header>

<div id="container">

<main id="content" class="hentry">

<article class="entry-content">

<header>

<h1 class="entry-title"><?php echo title; ?></h1>

</header>
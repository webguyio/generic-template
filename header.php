<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php echo description; ?>" />
<meta name="keywords" content="<?php echo keywords; ?>" />

<title><?php echo title; ?> | Company Name</title>

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="canonical" href="http://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/videos.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
$("#wrapper").vids();
});
</script>

</head>

<body id="<?php echo pageid; ?>">

<div id="wrapper" class="hfeed">

<header id="header"> 

<div id="site-title"><a href="./">Company Name</a></div>

<nav id="menu">

<label class="toggle" for="toggle">&#9776; Menu</label>
<input id="toggle" class="toggle" type="checkbox" />

<ul class="xoxo">

<li><a href="./">Page 1</a>
<ul>
<li><a href="#">Dropdown Item 1</a></li>
<li><a href="#">Dropdown Item 2</a></li>
<li><a href="#">Dropdown Item 3</a></li>
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

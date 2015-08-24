<!doctype html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Sai Prashanth">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<link rel="icon" type="image/png" href="favicon.png">

<!--[if lt IE 9]>  
<script src="html5shiv.js"></script> 
<script src="respond.min.js" type="text/javascript"></script>
<script src="selectivizr-min.js" type="text/javascript"></script>
 
<![endif]--> 

<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="first.css">
<link rel="stylesheet" href="sitewide.css">

</head>

<body>
<section id="container">
<header>
	<h2>My shop name here</h2>
<?php
if($nav==1)
{
	?>
	<nav>
	<ul>
	<li><a href="">Home</a></li>
	<li><a href="">Products</a></li>
	<li><a href="">Feedback</a></li>
	<li><a href="">Contact Us</a></li>
	</ul>
	</nav>
<?php
}
?>
</header>

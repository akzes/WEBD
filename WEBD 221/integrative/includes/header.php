<!DOCTYPE html>
<!--
Includes Page: Header HTML

Integrative Assignment: Not Far From the Tree Client
By: Ariel Gelbard & Andres Hernandez
Date: Tuesday, December 10, 2013
-->	

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Not Far From the Tree: <?php echo $pagename; ?></title>
		<meta name="author" content="Ariel Gelbard">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<!-- Fav Icons -->
		<link rel="shortcut icon" href="assets/favicon.ico"> 
		<link rel="apple-itouch-icon" href="assets/favicon.ico">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/reset2.css" />
		<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
		
		<!-- Jquery and Javascript -->
		<script src='js/jquery.1.10.2.js'></script>
		<script src='js/jquery.bxslider.min.js'></script>
		<script src='js/main.js'></script>
	</head>
	<body>
		<h1>Not Far From the Tree</h1>
		<div class="wrapper">
			<header>
				<div class='menu'>
					<img src='assets/menu.png' alt=""/>
				</div>
				<div class='logo'>
					<img src='assets/logo.png' alt=""/>
				</div>
				<div class='top_donate'>
					<a class="button" href="#">Donate</a>
				</div>
			</header>
			<nav>
				<ul>
					<a <?php if ($pagename==="Home"){
						echo"href='#' class='current_page'";
					}
					else{
						echo"href='index.php'";
					}
						?>><li>Home</li></a>
					<a href="#"><li>News</li></a>
					<a <?php 
					if ($pagename==="Getting Involved"){
						echo"href='#' class='current_page'";
					}
					else if($pagename==="Volunteer Registration"||$pagename==="Thank You"){
						echo"href='gettingInvolved.php' class='current_page'";
					}
					else{
						echo"href='gettingInvolved.php'";
					}
					?>><li>Getting Involved</li></a>
					

					<a href="#"><li>About Us</li></a>
					<a href="#"><li>Contact</li></a>
				</ul>
			</nav>			
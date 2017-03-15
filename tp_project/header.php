<?php
	include("../connection.php");
?><!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Gumby CSS  -->
		<link rel="stylesheet" href="gumby/css/gumby.css">

		<!-- Application custom CSS -->
		<link rel="stylesheet" href="css/main.css">

        <script src="gumby/js/libs/modernizr-2.6.2.min.js"></script><!-- Gumby uses Moderniser JS -->
		<script src="gumby/js/libs/modernizr-2.6.2.min.js"></script>

		<!-- Application custom CSS -->
        <script src="gumby/js/libs/jquery-2.0.2.min.js"></script>
		<script gumby-touch="gumby/js/libs" src="gumby/js/libs/gumby.min.js"></script>
</head>
<header>
       <div class="navbar" id="nav1">
		<div class="row">
            <div class="twelve columns">
                <a class="toggle"  href="#"><i class="icon-menu"></i></a>
			<h1 class="two columns logo">
				<a href="index.php">
					<img src="images/falafal.png" />
				</a>
			</h1>
			<ul class="ten columns">
                <li>
					<a href="product.php">PRODUCTS</a>
				</li>
                <li>
					<a href="shop.php">SHOPS</a>
				</li>
                <li><a href="about_us.php">ABOUT US</a></li>
				    <li class="field"><input class="search input" type="search" placeholder="Search" /> </li>
                <li><a href="cart.php"> <img src="images/cart.png" height="50px" width="50px" /> </a> </li>
				<?php
								//checking the session of the user
								if(isset($_SESSION["customeruser"])){
									$name= $_SESSION["customeruser"];
								echo"<li><a href='customerlogout.php'>Logout|$name</a></li>";
								}
								?>
			</ul>
            </div>
			
		</div>
	</div>
 </header>
   
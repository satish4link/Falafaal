<?php
	include("connection2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Falafaal</title>

	<!-- stylesheet css -->
	<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>

	<!-- bootstrap sytlesheet -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css"/>

	<!-- google fonts -->
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.min.css" />
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

	<!-- jQuery link-->
	<script src="../js/jquery-1.12.2.js"></script>
	<script src="../js/custom.js"></script>

</head>
<body>
	<header class="navigation-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-10">
					<div class="navigation-logo">
						<a href="#">FALAFAAL.com</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-2 col-md-2 navigation-user">
					<h3>
						<?php
							if(isset($_SESSION["traderuser"])){
								$tname = $_SESSION["traderuser"];
								echo "<a href='logout.php'>logout</a>, $tname";
							}
						?>
					</h3>
				</div>
			</div>
		</div>
	</header>
	<section class="navigation-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-2 col-md-1 side-menu-bg">
					<span class="menu-trigger"><i class="fa fa-list-ul"></i></span>
					<div class="side-menu">
						<ul>
							<li><a href="dashboard.php"><i class="fa fa-tachometer"></i> dashboard</a></li>
							<li><a href="traders.php"><i class="fa fa-user"></i> traders</a></li>
							<li><a href="product.php"><i class="fa fa-shopping-cart"></i> products</a></li>
							<li><a href="shops.php"><i class="fa fa-home"></i> shops</a></li>
							<li><a href="orders.php"><i class="fa fa-file-text-o"></i> orders</a></li>
							<li><a href="customers.php"><i class="fa fa-users"></i> customers</a></li>
						</ul>
					</div>
				</div>
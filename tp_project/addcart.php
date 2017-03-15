<?php
	include("../connection.php");

	$shop_name = $_POST['shop_name'];
	$p_id = $_POST['id'];
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$qty = $_POST['qty'];

	$_SESSION["cart"][] = array("id"=>$p_id, "pname" => $pname, "price" => $price, "qty" => $qty);
	header("location: cart.php");
	die();
?>
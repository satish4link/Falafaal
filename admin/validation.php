<?php
include("../connection.php");

$username = $_POST["username"];
$password = $_POST["password"];

if($username=="" || $password==""){
	header("location: index.php?error=1");
	die();
}else{
	$sql = "select * from adminpanel where username = '$username' and password='$password'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error());

	while($row = mysqli_fetch_assoc($result)){
		$_SESSION["adminuser"]= $row['username'];
		$_SESSION["adminuserid"]=$row['id'];

		header("location: dashboard.php");
		die();
	}
	header("location: index.php?error=2");
	die();
}
?>
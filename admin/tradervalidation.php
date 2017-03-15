<?php
include("../connection.php");

$username = $_POST['t_username'];
$password = $_POST['t_password'];

if($t_username = "" || $t_password = ""){
	header("location: traderindex.php?error=1");
	die();
}else{
	$sql = "select * from traders where t_username = '$username' and t_password='$password'";
	$result = mysqli_query($connection, $sql) or die(mysqli_query());
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION["traderuser"] = $row['t_username'];
		$_SESSION["traderuserid"] = $row['traders_id'];

		header("location: traders/dashboard.php");
		die();
	}
	header("location: traderindex.php?error=2");
	die();
}

?>
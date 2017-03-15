<?php
	include("../connection.php");
		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username == "" || $password == ""){
			echo "All fields should be filled up!";
			die();
		}else{
			$sql = "SELECT * FROM customers where username = '$username' and password = '$password'";
			$result = mysqli_query($connection, $sql) or die(mysqli_error());
			while($row = mysqli_fetch_assoc($result)){
				$_SESSION["customeruser"] = $row['username'];
				$_SESSION["customeruserid"] = $row['cust_id'];

				header("location: index.php");
				die();
			}
			header("location: index.php?error=1");
			die();
		}
	
?>
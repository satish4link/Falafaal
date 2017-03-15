<?php
if(!isset($_SESSION['adminuser'])){
	header("location: index.php");
	die();
}

?>
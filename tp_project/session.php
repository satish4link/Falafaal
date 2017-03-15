<?php
if(!isset($_SESSION['customeruser'])){
	header("location: index.php");
	die();
}
?>
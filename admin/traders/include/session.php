<?php
if(!isset($_SESSION["traderuser"])){
	header("location: ../traderindex.php");
	die();
}

?>
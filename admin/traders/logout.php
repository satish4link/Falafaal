<?php
	session_start();
	session_destroy();
	header("location: ../traderindex.php");
	die();
?>
<?php
 include("include/header.php");
 include("include/session.php");


?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="main-title">
			<h3>Traders</h3>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="traders-update">
			<h4><a href="traders.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> add traders</h4>
			<?php
				$error="";
				if(isset($_POST["add"])){
					$full_name = $_POST["full_name"];
					$t_username = $_POST["t_username"];
					$t_password = $_POST["t_password"];
					$t_email = $_POST["t_email"];

					if($full_name == "" || $t_username == "" || $t_password == "" || $t_email == ""){
						$error.= "<p>All fields must be filled up</p>";
					}else{
						$sql = "INSERT INTO traders(full_name, t_username, t_password, t_email) VALUES('$full_name', '$t_username', '$t_password', '$t_email')";

						$result = mysqli_query($connection, $sql);
						if($result){
							echo "<p>Data Inserted.</p>";
						}else{
							echo mysqli_error();
						}	
					}
					echo $error;
				}
			?>
			<form method="post">
				<p>fullname:</p> <input type="text" name="full_name" />
				<p>username:</p> <input type="text" name="t_username" />
				<p>password:</p> <input type="text" name="t_password" />
				<p>email: </p><input type="text" name="t_email" /><br />
				<input type="submit" name="add" value="Insert" />
			</form>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

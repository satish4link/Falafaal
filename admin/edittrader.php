<?php
 include("include/header.php");
 include("include/session.php");

 $id = $_GET['id'];
?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="main-title">
			<h3>Traders</h3>
			<a href="addtraders.php"><i class="fa fa-user-plus" aria-hidden="true"></i> add trader</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="traders-update">
			<h4><a href="traders.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> traders update</h4>
			<?php
				$error="";
				if(isset($_POST["add"])){
					$full_name = $_POST["full_name"];
					$t_username = $_POST["t_username"];
					$t_password = $_POST["t_password"];
					$t_email = $_POST["t_email"];

					if($full_name == "" || $t_username == "" || $t_password == "" || $t_email == ""){
						$error.= "<div class='error'><p>All fields must be filled up</p></div>";
					}else{
						$sql = "UPDATE traders set full_name='$full_name', t_username = '$t_username', t_password = '$t_password', t_email = '$t_email' where traders_id = '$id'";

						$result = mysqli_query($connection, $sql);
						if($result){
							echo "<div class='proceed'>";
							echo "<p>Data Updated</p>";
							echo "</div>";
						}else{
							echo mysqli_error();
						}	
					}
					echo $error;
				}

			$sql = "SELECT * FROM traders where traders_id = '$id'";
			$result = mysqli_query($connection, $sql);
			while($row = mysqli_fetch_assoc($result)){
				$full_name = $row['full_name'];
				$t_username = $row['t_username'];
				$t_password = $row['t_password'];
				$t_email = $row['t_email'];
			}
			?>
			<form method="post">
				<p>fullname:</p> <input type="text" name="full_name" value="<?php echo $full_name; ?>" />
				<p>username:</p> <input type="text" name="t_username" value="<?php echo $t_username; ?>" />
				<p>password:</p> <input type="text" name="t_password" value="<?php echo $t_password; ?>" />
				<p>email: </p><input type="text" name="t_email" value="<?php echo $t_email; ?>" /><br />
				<input type="submit" name="add" value="Update" />
			</form>
		</div>
	</div>
</div>
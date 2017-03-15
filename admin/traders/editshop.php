<?php
 include("include/header.php");
 include("include/session.php");

  $id = $_GET['id'];

?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="main-title">
			<h3>shops</h3>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="traders-update">
			<h4><a href="shops.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> add shop</h4>
			<?php
				$error="";
				if(isset($_POST["add"])){
					$traders_id = $_POST["traders_id"];
					$shop_name = $_POST["shop_name"];
					$shop_image = "";
					$shop_status = $_POST["shop_status"];

					if($traders_id  == "" || $shop_name == "" || $shop_status == ""){
						$error.= "<p>All fields must be filled up</p>";
					}
					if($error == ""){
						if(is_uploaded_file($_FILES['photo']['tmp_name'])){
							move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$_FILES['photo']['name']);
							$shop_image = $_FILES['photo']['name'];
						}
						$sql = $sql = "UPDATE shop set traders_id = '$traders_id', shop_name = '$shop_name', shop_image= '$shop_image', shop_status = '$shop_status' WHERE shop_id = '$id'";
					}else{
						$sql = "UPDATE shop set traders_id = '$traders_id', shop_name = '$shop_name' shop_status = '$shop_status' WHERE shop_id = '$id'";
					}
						$result = mysqli_query($connection, $sql);
						if($result){
							echo "<p>Data Updated.</p>";
						}else{
							echo mysqli_error();
						}	
				}else{
					echo $error;
				}
				$sql = "SELECT * FROM shop where shop_id = '$id'";
			$result = mysqli_query($connection, $sql);
			while($row = mysqli_fetch_assoc($result)){
				$shop_name = $row['shop_name'];
				$shop_image = $row['shop_image'];;
				$shop_status = $row['shop_status'];
			}
			?>
			<form method="post" enctype="multipart/form-data">
				<p>trader:</p> 
					<select name="traders_id" id="traders_id">
						<?php
						$sql1 = " SELECT * FROM traders";
						$result1 = mysqli_query($connection, $sql1) or die(mysqli_error());
						while ($row = mysqli_fetch_assoc($result1)) {
							if ($traders_id == $row['traders_id']) {
								echo "<option value='" . $row['traders_id'] . "' selected>" . $row['full_name'] . "</option>";
							} else {
								echo "<option value='" . $row['traders_id'] . "'>" . $row['full_name'] . "</option>";
							}
						}
						?>
					</select>
				<p>shop name:</p> <input type="text" name="shop_name" value="<?php echo $shop_name; ?>"/>
				<p>shop image:</p> <input type="file" name="photo" />
				<p>shop status:</p> <input type="text" name="shop_status" value="<?php echo $shop_status; ?>"/><br />
				<input type="submit" name="add" value="Update" />
			</form>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

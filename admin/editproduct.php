<?php
 include("include/header.php");
 include("include/session.php");

 $id = $_GET['id'];
?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="main-title">
			<h3>products</h3>
			<a href="addproduct.php"><i class="fa fa-plus" aria-hidden="true"></i> add product</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="traders-update">
			<h4><a href="product.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> update product</h4>
			<?php
				$error="";
				if(isset($_POST["add"])){
					$shop_id = $_POST["shop_id"];
					$product_name = $_POST["product_name"];
					$product_image = "";
					$product_rate = $_POST["product_rate"];
					$description = $_POST["description"];

					if($shop_id  == "" || $product_name == "" || $product_rate == "" || $description == ""){
						$error.= "<p>All fields must be filled up</p>";
					}
					if($error == ""){
						if(is_uploaded_file($_FILES['product_image']['tmp_name'])){
							move_uploaded_file($_FILES['product_image']['tmp_name'],"images/".$_FILES['product_image']['name']);
							$product_image = $_FILES['product_image']['name'];
						}
						$sql = "UPDATE product set shop_id = '$shop_id', product_name = '$product_name', product_image= '$product_image', product_rate = '$product_rate', description = '$description' WHERE product_id = '$id'";
						}else{
							$sql = "UPDATE product set shop_id = '$shop_id', product_name = '$product_name', product_rate = '$product_rate', description = '$description' WHERE product_id = '$id'";
						}
						$result = mysqli_query($connection, $sql);
						if($result){
							echo "<p>Data Inserted.</p>";
						}else{
							echo mysqli_error();
						}	
					}else{
					echo $error;
					}
				$sql=" SELECT * FROM product where product_id='$id'";
				$result = mysqli_query($connection, $sql);
				while($row = mysqli_fetch_assoc($result)){
					$product_name = $row['product_name'];
					$product_image = $row['product_image'];
					$product_rate = $row['product_rate'];
					$description = $row['description'];
				}
			?>
			<form method="post" enctype="multipart/form-data">
				<p>shop:</p> 
					<select name="shop_id" id="shop_id">
						<option value="">--SELECT--</option>
						<?php
						$sql1 = " SELECT * FROM shop";
						$result1 = mysqli_query($connection, $sql1) or die(mysqli_error());
						while ($row = mysqli_fetch_assoc($result1)) {
							if ($shop_id == $row['shop_id']) {
								echo "<option value='" . $row['shop_id'] . "' selected>" . $row['shop_name'] . "</option>";
							} else {
								echo "<option value='" . $row['shop_id'] . "'>" . $row['shop_name'] . "</option>";
							}
						}
						?>
					</select>
				<p>product name:</p> <input type="text" name="product_name" value="<?php echo $product_name; ?>" />
				<p>product image:</p> <input type="file" name="product_image" />
				<p>product rate:</p> <input type="number" name="product_rate" value="<?php echo $product_rate; ?>" />
				<p>description:</p> <textarea name="description" cols="82" rows="3"><?php echo $description; ?></textarea><br />
				<input type="submit" name="add" value="Insert" />
			</form>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

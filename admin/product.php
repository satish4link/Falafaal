<?php
 include("include/header.php");
 include("include/session.php");

 if(isset($_GET["mode"])){
 	$mode =$_GET["mode"];
 	if($mode=="del"){
 		$id = $_GET["id"];
 		$sql="DELETE FROM product WHERE product_id = '$id'";
 		$result = mysqli_query($connection, $sql);
 	}
 }
?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="main-title">
			<h3>products</h3>
			<a href="addproduct.php"><i class="fa fa-plus" aria-hidden="true"></i> add product</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="traders-list">
			<?php
				$sql= "SELECT product.product_id, product.product_name, product.product_rate, product.product_image, product.description, shop.shop_name FROM shop, product WHERE product.shop_id = shop.shop_id";
					$result=mysqli_query($connection, $sql) or die(mysqli_error());
					while($row = mysqli_fetch_assoc($result)){
						echo "<div class='traders-box'>";
						echo "<h4><span>shop: </span>".$row['shop_name']."</h4>";
						echo "<h4><span>product name: </span>".$row['product_name']."</h4>";
						echo "<h4><span>product image: </span> <img width='100' height='100' src='images/".$row['product_image']."'></h4>";
						echo "<h4><span>product rate: </span>".$row['product_rate']."</h4>";
						echo "<h4><span>description: </span>".substr($row['description'],0,80)."</h4>";
						echo "<ul>"."<li>";
							echo "<a href=editproduct.php?id=".$row['product_id']."><i class='fa fa-pencil-square-o'></i> edit</a>"."</li>";
							echo "<li>"."<a onclick='return confirmDel()' href=?mode=del&id=".$row['product_id']."><i class='fa fa-trash'></i> delete</a>";
							echo "</li>"."</ul>";
						echo "</div>";
					}
			?>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

<?php
 include("include/header.php");
 include("include/session.php");

 /* for shop delete */
  if(isset($_GET["mode"])){
 	$mode =$_GET["mode"];
 	if($mode=="del"){
 		$id = $_GET["id"];
 		$sql="DELETE FROM shop WHERE shop_id = '$id'";
 		$result = mysqli_query($connection, $sql);
 	}
 }

?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="main-title">
			<h3>shops</h3>
			<a href="addshop.php"><i class="fa fa-plus" aria-hidden="true"></i> add shop</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="traders-list">
			<?php
				$sql= "SELECT shop.shop_id, shop.shop_name, shop.shop_image, shop.shop_status, traders.full_name FROM shop, traders WHERE traders.traders_id = shop.traders_id";
					$result=mysqli_query($connection, $sql) or die(mysqli_error());
					while($row = mysqli_fetch_assoc($result)){
						echo "<div class='traders-box'>";
						echo "<h4><span>trader: </span>".$row['full_name']."</h4>";
						echo "<h4><span>shop name: </span>".$row['shop_name']."</h4>";
						echo "<h4><span>shop image: </span> <img width='100' height='100' src='images/".$row['shop_image']."'></h4>";
						echo "<h4><span>shop status: </span>".$row['shop_status']."</h4>";
						echo "<ul>"."<li>";
							echo "<a href=editshop.php?id=".$row['shop_id']."><i class='fa fa-pencil-square-o'></i> edit</a>"."</li>";
							echo "<li>"."<a onclick='return confirmDel()' href=?mode=del&id=".$row['shop_id']."><i class='fa fa-trash'></i> delete</a>";
							echo "</li>"."</ul>";
						echo "</div>";
					}
			?>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

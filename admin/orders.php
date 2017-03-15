<?php
 include("include/header.php");
 include("include/session.php");

if(isset($_GET["mode"])){
 	$mode =$_GET["mode"];
 	if($mode=="del"){
 		$id = $_GET["id"];
 		$sql="DELETE FROM orders WHERE o_id = '$id'";
 		$result = mysqli_query($connection, $sql);
 	}
 }

?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="main-title">
			<h3>orders</h3>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="traders-list">
			<?php
				$sql = "SELECT * FROM orders ORDER BY o_id DESC";
				$result = mysqli_query($connection, $sql) or die(mysqli_error());
				while($row = mysqli_fetch_assoc($result)){
					echo "<div class='traders-box'>";
						echo "<h4><span>Customer: </span>".$row['cust_name']."</h4>";
						echo "<h4><span>Product: </span>".$row['prod_name']."</h4>";
						echo "<h4><span>price: </span>"."$".$row['price']."</h4>";
						echo "<h4><span>Quantity: </span>".$row['qty']."</h4>";
						echo "<h4><span>Total: </span>"."$".$row['total']."</h4>";
						echo "<ul>"."<li>";
							echo "<li>"."<a onclick='return confirmDel()' href=?mode=del&id=".$row['o_id']."><i class='fa fa-trash'></i> delete</a>";
							echo "</li>"."</ul>";
					echo "</div>";
				}
			?>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

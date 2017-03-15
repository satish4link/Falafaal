<?php
 include("include/header.php");
 include("include/session.php");

 /* deleting traders account*/
 if(isset($_GET["mode"])){
 	$mode =$_GET["mode"];
 	if($mode=="del"){
 		$id = $_GET["id"];
 		$sql="DELETE FROM customers WHERE cust_id = '$id'";
 		$result = mysqli_query($connection, $sql);
 	}
 }
?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="main-title">
			<h3>customers</h3>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
		<div class="traders-list">
			<?php
			if(isset($_SESSION["traderuser"])){
			echo "<h1 style='color:red; padding:50px 0;'><center>Sorry! You don't have permission to visit this page.</center></h1>";
				}else{
				$sql="SELECT * FROM customers";
					$result = mysqli_query($connection, $sql) or die(mysqli_error());
					while($row = mysqli_fetch_assoc($result)){
						echo "<div class='traders-box'>";
						echo "<h4><span>name: </span>".$row['fname'].$row['lname']."</h4>";
						echo "<h4><span>username: </span>".$row['username']."</h4>";
						echo "<h4><span>email: </span>".$row['email']."</h4>";
						echo "<ul>"."<li>";
							echo "<a href=detailcustomer.php?id=".$row['cust_id']."><i class='fa fa-database'></i> view</a>"."</li>";
							echo "<li>"."<a onclick='return confirmDel()' href=?mode=del&id=".$row['cust_id']."><i class='fa fa-trash'></i> delete</a>";
							echo "</li>"."</ul>";
						echo "</div>";
					}
				}
			?>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

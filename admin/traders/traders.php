<?php
 include("include/header.php");
 include("include/session.php");

 /* deleting traders account*/
 if(isset($_GET["mode"])){
 	$mode =$_GET["mode"];
 	if($mode=="del"){
 		$id = $_GET["id"];
 		$sql="DELETE FROM traders WHERE traders_id = '$id'";
 		$result = mysqli_query($connection, $sql);
 	}
 }
?>
<div class="col-xs-12 col-sm-11 col-md-11">
	<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
	<?php
		echo "<div class='main-title'>
			<h3>Traders</h3>
		</div>
	</div>
	<div class='col-xs-12 col-sm-12 col-md-12 no-padding'>
		<div class='traders-list'>";
			if(isset($_SESSION["traderuser"])){
			echo "<h1 style='color:red; padding:50px;'><center>Sorry! You don't have permission to visit this page.</center></h1>";
				}else{
				$sql="SELECT * FROM traders";
					$result = mysqli_query($connection, $sql) or die(mysqli_error());
					while($row = mysqli_fetch_assoc($result)){
						echo "<div class='traders-box'>";
						echo "<h4><span>name: </span>".$row['full_name']."</h4>";
						echo "<h4><span>username: </span>".$row['t_username']."</h4>";
						echo "<h4><span>password: </span>".$row['t_password']."</h4>";
						echo "<h4><span>email: </span>".$row['t_email']."</h4>";
						echo "<ul>"."<li>";
							echo "<a href=edittrader.php?id=".$row['traders_id']."><i class='fa fa-pencil-square-o'></i> edit</a>"."</li>";
							echo "<li>"."<a onclick='return confirmDel()' href=?mode=del&id=".$row['traders_id']."><i class='fa fa-trash'></i> delete</a>";
							echo "</li>"."</ul>";
						echo "</div>";
					}
				}
			?>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

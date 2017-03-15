<?php
 include("include/header.php");
 include("include/session.php");

 $id=$_GET['id'];
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
				$sql="SELECT * FROM customers WHERE cust_id = '$id'";
					$result = mysqli_query($connection, $sql) or die(mysqli_error());
					while($row = mysqli_fetch_assoc($result)){
						echo "<div class='traders-box'>";
						echo "<h3>customer details</h3>";
						echo "<h4><span>first name: </span>".$row['fname']."</h4>";
						echo "<h4><span>last name: </span>".$row['lname']."</h4>";
						echo "<h4><span>username: </span>".$row['username']."</h4>";
						echo "<h4><span>password: </span>".$row['password']."</h4>";
						echo "<h4><span>email: </span>".$row['email']."</h4>";
						echo "<ul>"."<li>";
							echo "<a href=customers.php?id=".$row['cust_id']."><i class='fa fa-arrow-left'></i> back</a>"."</li>";
							echo "</li>"."</ul>";
						echo "</div>";
					}
			?>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>

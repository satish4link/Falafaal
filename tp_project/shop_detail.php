<?php
    include("header.php");
    //include("session.php");
    $id = $_GET['id'];
?>
<html>
<head>
   <!-- Gumby CSS  -->
		<link rel="stylesheet" href="gumby/css/gumby.css">

		<!-- Application custom CSS -->
		<link rel="stylesheet" href="css/main.css">

</head>
<div id="index_mid">
            <div class="row">
                <div class="twelve columns">
                    <?php
                    $sql = "SELECT * FROM shop WHERE shop_id ='$id'";
                    $result = mysqli_query($connection, $sql) or die(mysqli_error());
                    while($row = mysqli_fetch_assoc($result)){
	                    
	                    echo "<div class='seven columns'>";
	                    echo "<h3>".$row['shop_name']."</h3>";
	                    echo "<br> ________________________________________________________________________<br>";
	                    echo "<img src='../admin/images/".$row['shop_image']."'>";
	                        
	                    echo "</div>";
	                    
	                    echo "<div class='five columns'>";
	                    echo "<table class='rounded'>";
						           echo "<thead>";
							             echo "<tr style='background-color: green;'>";
	                                      echo "<th>Shop</th>";
								         echo "<th>".$row['shop_name']."</th>";
	                                      
							          echo "</tr>";
						           echo "</thead>";
						       echo "<tbody>";
	                                echo "<tr>";
								echo "<td>About</td>";
								echo "<td>".$row['shop_status']."</td>";
	                               echo "</tr>";
						       echo "</tbody>";
					        echo "</table>";
	                    echo "</div>";   
                	}	
                    ?>
                </div>
                </div>
            </div>
</html>
<?php
    include("footer.php");
?>
    

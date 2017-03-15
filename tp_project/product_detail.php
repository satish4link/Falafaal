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



                    $sql = "SELECT product.product_id, product.product_name, product.product_rate, product.product_image, product.description, shop.shop_name FROM shop, product WHERE product.shop_id = shop.shop_id and product.product_id = '$id'";
                    $result = mysqli_query($connection, $sql) or die(mysqli_error());
                    while($row = mysqli_fetch_assoc($result)){
	                    
	                    $shop_name = $row['shop_name'];
	                    $pname = $row['product_name'];
                    	$price = $row['product_rate'];

	                    echo "<div class='seven columns'>";
	                    echo "<h3>".$row['product_name']."</h3>";
	                    echo "<br> ________________________________________________________________________<br>";
	                    echo "<img src='../admin/images/".$row['product_image']."'>";
	                        
	                    echo "</div>";
	                    
	                    echo "<div class='five columns'>";
	                    echo "<table class='rounded'>";
						           echo "<thead>";
							             echo "<tr style='background-color: green;'>";
	                                      echo "<th>Product</th>";
								         echo "<th>".$row['product_name']."</th>";
	                                      
							          echo "</tr>";
						           echo "</thead>";
						       echo "<tbody>";
							      echo "<tr>";
							    echo "<td>Shop</td>";
								echo "<td>".$row['shop_name']."</td>";
	                               echo "</tr>";
	                                
	                                echo "<tr>";
								echo "<td>Description</td>";
								echo "<td>".$row['description']."</td>";
	                               echo "</tr>";
	                                echo "<tr>";
								echo "<td>Price</td>";
								echo "<td>".$row['product_rate']."</td>";
	                               echo "</tr>";
						       echo "</tbody>";
					        echo "</table>";

	                        echo "<i>QUANTITY</i> <br />";
	                        
	                        	echo "<form method='post' action='addcart.php'>
	                        		<input type='hidden' name='sname' value='$shop_name'>
	                        		<input type='hidden' name='id' value='$id'>
	                        		<input type='hidden' name='pname' value='$pname'>
	                        		<input type='hidden' name='price' value='$price'>";
	                        		echo "<div class='picker'>
									<select name='qty'>
										<option value='#' disabled=''>Quantity</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
	                                    <option>9</option>
									</select>
								</div>
	                        <input class='medium primary btn six columns centered' type='submit' name='add' value='Add To Cart'>
	                        	</form>
	                    </div>";
                	}	
                    ?>
                </div>
                </div>
            </div>
</html>
<?php
    include("footer.php");
?>
    

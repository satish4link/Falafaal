<?php
    include("header.php");
    //include("session.php");
?>
<html>
<head>
   <!-- Gumby CSS  -->
		<link rel="stylesheet" href="gumby/css/gumby.css">

		<!-- Application custom CSS -->
		<link rel="stylesheet" href="css/main.css">

</head>
<div id="index_mid" style="padding-top: 0px;">
            <div class="row">
                <div class="twelve columns">
                    
                   <table class="striped rounded">
                       
					<caption> MY CART  </caption>
					<thead>
						<tr>
                            <th>Product </th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Grand Total</th>
						</tr>
					</thead>
					<?php
						if(isset($_SESSION["customeruser"])){
							echo "<tbody>";
							$grandtotal=0;
							if(isset($_SESSION["cart"])){
											
								
									foreach ($_SESSION["cart"] as $value) {

										$id= $value['id'];
										$pname= $value['pname'];
										$price= $value['price'];
										$qty= $value['qty'];
										$total=$price*$qty;
										$grandtotal += $total;
										
								echo "<tr>
									<td>$pname</td>
		                            <td>$$price</td>
		                            <td>$qty</td>
		                            <td>$$total</td>
		                            <td></td>
								</tr>";}
								echo "<tr>
										<td></td>
										<td></td>
										<td></td>
										<td>Grand Total:</td>
										<td>$$grandtotal</td>
									</tr>
								";
								}
							echo "</tbody>";
						}else{
							echo "<h3 style='color:red'>Please Login First</h3>";
						}
                    ?>
                        
				</table>
                    <div>
                        <a href="checkout.php"> <img src="images/paypal.png"  /> </a> 
                    </div>
                </div>
                </div>
            </div>
</html>
<?php
    include("footer.php");
?>
    
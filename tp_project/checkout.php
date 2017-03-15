<?php
    include("header.php");
    include("session.php");
?>
<html>
<head>
   <!-- Gumby CSS  -->
		<link rel="stylesheet" href="gumby/css/gumby.css">

		<!-- Application custom CSS -->
		<link rel="stylesheet" href="css/main.css">

</head>
	<body>
		<div id="index_mid" style="padding-top: 0px;">
        <div class="row">
            <div class="twelve columns">
				<div class="checkout">
					<?php
						if(isset($_SESSION["customeruser"])) {
        		 			
        		 			if(empty($_SESSION["cart"])){
        		 				echo "<h2> Please order some product first.</h2>";
        		 			}else{
								$name=$_SESSION["customeruser"];
								echo"<h2> Thank you  $name for ordering,Your delivery will be in next few business days.</h2>";
								
								//extracting the value 
					        	foreach ($_SESSION["cart"] as $value) {
				        		
									$id= $value['id'];
									$pname= $value['pname'];
									$price= $value['price'];
									$qty= $value['qty'];
									$total=$price*$qty;
									
								
									$sql1="insert into orders(cust_name,prod_id,prod_name,price,qty,total) values('$name','$id','$pname','$price','$qty','$total')";
									$result1=mysqli_query($connection,$sql1);
								}
							}
							//clearing the cart values after buying the items
							unset($_SESSION["cart"]);

			        	}else {
			        		unset($_SESSION["cart"]);
			        		echo"<h2>Please login and have your orders.</h2>";	
			        	}
					?>
				</div>
            </div>
        </div>
    	</div>
    </body>
</html>
<?php
    include("footer.php");
?>
   
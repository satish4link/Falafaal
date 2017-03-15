<?php
    include("header.php");
    //include("session.php");
?>
<head>
   <!-- Gumby CSS  -->
		<link rel="stylesheet" href="/gumby/css/gumby.css">

		<!-- Application custom CSS -->
		<link rel="stylesheet" href="/css/main.css">

</head> 
    <body>
      <div id="index_mid">
            <div class="row">
                <h1> Products </h1>
                <div class="twelve columns">
                <?php
                    $sql= "SELECT product.product_id, product.product_name, product.product_rate, product.product_image FROM product";
                        $result=mysqli_query($connection, $sql) or die(mysqli_error());
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<div class='four columns' style='padding:20px 0;'>";
                            echo "<h3>".$row['product_name']."</h3>";
                            echo "_________________________________";
                            echo "<a href=product_detail.php?id=".$row['product_id']."><img width='450' height='500' src='../admin/images/".$row['product_image']."'>";
                            echo "<br>";
                            echo "price: "."$".$row['product_rate'];
                            echo "<br>";
                            echo "<a href=product_detail.php?id=".$row['product_id']."> View More Details...</a>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
<?php
    include("footer.php");
?>
<head>

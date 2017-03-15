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
                <h1> Shops </h1>
                <div class="twelve columns">
                <?php
                $sql = "SELECT * FROM shop";
                $result = mysqli_query($connection, $sql) or die(mysqli_error());
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<div class='four columns' style='padding:20px 0;'>";
                        echo "<h3>".$row['shop_name']."</h3>";
                        echo "_________________________________";
                        echo "<a href=shop_detail.php?id=".$row['shop_id']."> <img src='../admin/images/".$row['shop_image']."'> </a> <br>
                        <a href=shop_detail.php?id=".$row['shop_id']."> View Details...</a>
                    </div>";

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

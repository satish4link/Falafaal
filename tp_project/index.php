<?php
    include("header.php");
?>
<head>
   <!-- Gumby CSS  -->
		<link rel="stylesheet" href="/gumby/css/gumby.css">

		<!-- Application custom CSS -->
		<link rel="stylesheet" href="/css/main.css">

</head> 
<body > 


           <div style="background-image:url(images/shopping_cart1.jpg);height: 685px;">

    <?php
    if(isset($_SESSION["customeruser"])){
      echo "<h1 style='color:#ffffff; padding-top:300px; text-align:center;'>Welcome To</h1>";
     echo "<div id='index_top' class='twelve columns' style=' width: 500px; height:300px; text-align: center; float: none; margin: auto;'>
         <img src='images/falafal.png' width='300px' />";
    }else{
      echo "<div id='index_top' class='twelve columns' style=' width: 500px; height: 600px; text-align: center; float: none; margin: auto;'>
         <img src='images/falafal.png' width='300px' />";
				echo "<section class='pill tabs'>";
					
					echo "<ul class='tab-nav'>
						<li class='active'><a href='#'>Sign Up</a></li>
						<li><a href='#'>Log In</a></li>
						
					</ul>";
					echo "<div class='tab-content active'>";

        $error="";
        if(isset($_POST["add"])){
          $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $username = $_POST["username"];
          $password = $_POST["password"];
          $password1 = $_POST["password1"];
          $email = $_POST["email"];

          if($fname == "" || $lname == "" || $username == "" || $password == "" || $password1 == "" || $email == ""){
            $error.= "<p>All fields must be filled up</p>";
          }else{
            if($password == $password1){
              
              $sql = "INSERT INTO customers(fname, lname, username, password, email) VALUES('$fname', '$lname', '$username', '$password', '$email')";
              $result = mysqli_query($connection, $sql) or die(mysqli_error());
                if($result){
                  echo "<p>Data Inserted.</p>";
                }else{
                  echo mysqli_error();
                }
            }else{
              $error.="<p>Password didnt match.</p>";
            }
          }
          echo $error;
        }
      
						echo "<form method='post'>
					<ul>
						<h3 class='lead'>Sign Up for Free</h3>
						<li class='field'>
							<input class='normal text input' type='text' name='fname' placeholder='First Name*' />
							<input class='normal text input' type='text' name='lname' placeholder='Last Name*' />
						</li>

                        <li class='field'><input class='xxwide text input' name ='email' type='text' placeholder='E-mail Address*' /></li>
                        <li class='field'><input class='xxwide text input' type='text' name='username' placeholder='Username*' /></li>
                        <li class='field'><input class='xxwide text input' type='password' name='password' placeholder='Set A Password*' /></li>
                        <li class='field'><input class='xxwide text input' type='password' name='password1' placeholder='Re Enter Password*' /></li>
						<input class='medium primary btn pull_left' type='submit' value='Get Started' name='add' />
						
					</ul>
                        </form>
				            
					</div>
					<div class='tab-content'>
						
                        
                        <form method='post' action='customer_validation.php'>
					       <ul>
                               <H4> Welcome Back !</H4>
						      <li class='field'><input class='email input' type='text' name='username' placeholder='Username * ' /></li>
						      <li class='field'><input class='password input' type='password' name='password' placeholder='Password *' /></li>
                               <a href='#'> forgot password ?</a> <br> <br>
                               <input class='medium primary btn pull_left' type='submit' name='login' value='Login' />
					       </ul>
				        </form>
					</div>
				</section>
			</div>";
      }
      ?>
		</div>
       
    <div id="index_mid">
            <div class="row">
                <h1> Available Shops </h1>
                <div class="twelve columns">
                    
                    <div class="four columns">
                        <h3> Greengrocer </h3>
                        <br> _________________________________<br>
                        <a href="#"> <img height="500px" width="700px" src="../admin/images/greengrocer.jpg"> </a> <br>
                    </div>
                    <div class="four columns">
                        <h3> Fishmonger </h3>
                        <br> _________________________________<br>
                        <a href="#"> <img height="500px" width="700px" src="../admin/images/fishmonger.jpg"> </a>
                        <a href="shop.php"> View More Shops...</a>
                    </div>
                    <div class="four columns">
                        <h3> Bakery </h3>
                        <br> _________________________________<br>
                        <a href="#"> <img height="500px" width="700px" src="../admin/images/bakery.jpg"> </a>
                    </div>
                    
                </div>
                
            </div>
    </div>
   <div id="index_mid">
            <div class="row">
                <h1> Available products </h1>
                <div class="twelve columns">
                    
                    <div class="four columns">
                        <h3> product 1 </h3>
                        <br> _________________________________<br>
                        <a href="#"> <img height="500px" width="700px" src="../admin/images/blackforest.jpg"> </a>
                    </div>
                    <div class="four columns">
                        <h3>product 2 </h3>
                        <br> _________________________________<br>
                        <a href="#"> <img height="500px" width="700px" src="../admin/images/cauli.jpg"> </a>
                        <a href="product.php"> View More Products...</a>
                    </div>
                    <div class="four columns">
                        <h3> product 3 </h3>
                        <br> _________________________________<br>
                        <a href="#"> <img height="500px" width="700px" src="../admin/images/chickenwings.jpg"> </a>
                    </div>
                </div>
            </div>
    </div>
</body>
<?php
    include("footer.php");
?>
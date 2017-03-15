<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Falafaal</title>

	<!-- bootstrap sytlesheet -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css"/>
	
	<!-- stylesheet css -->
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />

	<!-- google font link-->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700' rel='stylesheet' type='text/css'>

</head>
<body>
	<section class="content-login">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4"></div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form">
						<a href="index.php"><i class="fa fa-user"></i> admin login</a>
						<div class="col-xs-1 col-sm-1 col-md-1"></div>
						<div class="col-xs-10 col-sm-10 col-md-10">
							<h1 style="font-size:25px; font-weight:bold;"><i class="fa fa-users"></i> traders login</h1>
							<form method="post" action="tradervalidation.php">
								<div class="user-input no-padding no-margin">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
									<input name="t_username" type="text" id="input-text" placeholder="USERNAME" />
								</div>
								<div class="password-input no-padding no-margin">
									<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
									<input name="t_password" type="password" id="input-text" placeholder="PASSWORD" />
								</div>
								<div class="button-style">
									<input type="submit" value="login"/>
									<input type="reset" />
								</div>
								<span class="password-forgot">forget password?</span>
							</form>
						</div>
						<div class="col-xs-1 col-sm-1 col-md-1"></div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4"></div>
			</div>
		</div>
	</section>
</body>
</html>
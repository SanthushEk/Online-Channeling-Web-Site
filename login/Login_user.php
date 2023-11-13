<?php require_once "controllerUserData.php" ?>


<!DOCTYPE Html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
	body {background-color: #2596be;}
	
	form {padding-top: 200px;}
	a {color: whitesmoke;}
	.alert {color: greenyellow;}

</style>

<body>


<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4 form login-form">
			<form action="" method="post" autocomplete="">
				
				<h2 class="text-center">Login</h2>
				<p class="text-center">Login with email and password</p>

				<?php 

				if(count($errors)>0){
					?>

					<div class="alert">
						<?php

						 foreach ($errors as $showerror){
						 	echo $showerror;
						 }
						?>
					</div>
					<?php

				}
				?>

				


				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Email Address">
				</div>

				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password">
				</div>

				

				<div class="form-group">
					<input type="submit" name="login" class="form-control button" value="Login">
				</div>



				<div class="link login-link text-center">
					Not a Member yet?
					<a href="sign-user.php" >SignUp</a>
					<br>
					Back To Home
					<a href="../Pages/Home.html" >Back To Home</a>
				</div>

			</form>

		</div>
	</div>
</div>




</body>
</html>
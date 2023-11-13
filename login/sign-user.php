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
	

</style>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4 form login-form">
			<form action="Login_user.php" method="post" autocomplete="">
				
				<h2 class="text-center">Sign Up</h2>
				<p class="text-center">It's quick And easy</p>

				<?php 
				if(count($errors) == 1){
					?>

					<div class="alert alert-danger text-center">
						<?php

						foreach ($errors as $showerror) {
							echo $showerror;
						}
						?>
					</div>

					<?php
                }elseif (count($errors)>1) {
                	?>
                	<div class="alert alert-danger">
                		<?php
                		foreach($errors as $showerror){
                			?>

                			<li><?php echo $showerror;?></li>
                			<?php
                		}
                		?>
                		
                	</div>

                	<?php 
                }
                	?>
                

                <div class="form-group">
                	<input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>" >
                </div>

                <div class="form-group">
                	<input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>" >
                </div>

                <div class="form-group">
                	<input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                	<input class="form-control" type="password" name="cpassword" placeholder="Conferm Password" required>
                </div>

                <div class="form-group">
                	<input class="form-control button" type="submit" name="signup" value="Signup">
                </div>

                <div class="link login-link text-center">Already a Member? 
                	<a href="http://localhost/Login/login_user.php/">Login Here</a>
					




				

			</form>

		</div>
	</div>
</div>




</body>
</html>
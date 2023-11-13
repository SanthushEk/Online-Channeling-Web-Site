<?php

session_start();
require "connection.php";

$email ='';
$name ='';
$errors = array();

//if user signup button

if(isset($_POST['signup'])){
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	if ($password !== $cpassword) {
		$errors['password'] = "Conferm password not matched!";
	}

	$email_check ="SELECT * FROM usertable WHERE email = '$email' ";

	$res=mysqli_query($con, $email_check);

	if(mysqli_num_rows($res) >0 ){
		$errors['email']= "Email That You Have  Entered Is Already Exits!";
	}

	if (count($errors) === 0) {
		
		$code = rand(999999,111111);
		$status = "notverified";
		$insert_data = "INSERT INTO usertable (name,email,password,code,status) 
		                 VALUES('$name','$email','$password','$code','$status')";

		$data_check =mysqli_query($con,$insert_data);

		if($data_check){

		        echo "Succecfully login";
		        header("Location:Login_user.php");
				
				exit();
			}
		}else{
			$errors['db-errors'] = "Failed While Inserting Data Into Database!";
		}
	}


//user log in

	if (isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email) || empty($password))
		{
			echo "Please Fill In the banks";
		}
		else{
			$query = "SELECT * FROM usertable WHERE email='$email'";
			$result = mysqli_query($con,$query);

			if ($row=mysqli_fetch_assoc($result) ) {
				$db_password = $row['password'];

				if( $password ==  $db_password)
				{
					echo "Succecfully Login";
				}
				else
				{
					echo "incorect password";
				}
			}
			else
			{
				echo "Please check your queary";
			}


		}


	}

?>

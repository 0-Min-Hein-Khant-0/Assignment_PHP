<?php 

require 'connect.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>

	<?php 
	$nameError ='';
	$emailError ='';
	$addressError ='';
	$passwordError ='';
	$confirmpasswordError ='';

	if(isset($_POST['registerbtn']))
	{


		// echo "I love";
		$name = $_POST['name'];
		$email= $_POST['email'];
		$address=$_POST['address'];
		$password=$_POST['password'];
		$confirm_password=$_POST['confirm_password'];



		if(empty($name))
		{
			$nameError ='The name field is required';
		}
		if(empty($email))
		{
			$emailError ='The email field is required';
		}
		if(empty($address))
		{
			$addressError ='The address field is required';
		}
		if(empty($password))
		{
			$passwordError ='The password field is required';
		}
		if(empty($confirm_password))
		{
			$confirmpasswordError ='The confirm password field is required';
		}
		if($confirm_password != $password)
		{
			$confirmpasswordError ='The password does not match';
		}



		if(!empty($name) && !empty($email) && !empty($address) && !empty($password) && !empty($confirm_password) && $confirm_password == $password)
		{
		$query ="INSERT INTO users(name,email,address,password) VALUES('$name','$email','$address','$password')";
		$sql = mysqli_query($db,$query);

		if($sql == true)
		{
			echo "<script>alert('Successfully')</script>";
			header('location:login.php');
		}
		else
		{
			die('Error'. mysqli_error($sql));
		}	
		}



		
	}

	 ?>

<div class="container my-5">

	<div class="row">

		<div class="col-md-12">

			<div class="card">

				<div class="card-header">
					<div class="card-title">

						<h3>Register Page</h3>

						<a href="index.php" class="float-right ml-3">
						<button class="btn btn-info">Back</button>
						</a>
						
					</div>
				</div>
				<div class="card-body">
					<div class="row">

								<div class="col-md-3">
									
								</div>
								<div class="col-md-6">
									<div class="card">

						<div class="card-header">
							<div class="card-title">
								Register
							</div>
						</div>
						<div class="card-body">

							
							<form action="register.php" method="POST">
								<label>Name</label>
								<input type="text" name="name" class="form-control

								 <?php if($nameError != ''){ ?> is-invalid <?php } ?>"
								  value="<?= $name ?>">


								<span class="text-danger"><?= $nameError?></span>
								<br>
								<label class="my-3">Email</label>
								<input type="email" name="email" class="form-control 
								 <?php if($emailError != ''){ ?> is-invalid <?php } ?>"  value="<?= $password ?>">
								<span class="text-danger"><?= $emailError?></span>
								<br>
								<label class="my-3">Address</label>
								<textarea class="form-control 
								 <?php if($addressError != ''){ ?> is-invalid <?php } ?>" name="address" rows="3"><?= $address ?></textarea>
								<span class="text-danger"><?= $addressError?></span>
								<br>
								<label class="my-3">Password</label>
								<input type="password" name="password" class="form-control
								 <?php if($passwordError != ''){ ?> is-invalid <?php } ?>"  value="<?= $password ?>">
								<span class="text-danger"><?= $passwordError?></span>
								<br>
								<label class="my-3">Confirm Password</label>
								<input type="password" name="confirm_password" class="form-control 
								 <?php if($confirmpasswordError != ''){ ?> is-invalid <?php } ?>">
								<span class="text-danger"><?= $confirmpasswordError?></span>
								<br>
								<a href="">
									<button class="btn btn-primary my-3" name="registerbtn">Register</button>
									
								</a>
								<span class="float-right my-4">
									If you already had account, 
								<a href="login.php">login here</a>
								</span>
							</form>
						</div>
						<div class="card-footer">
							
						</div>
						
					</div>
								</div>
								<div class="col-md-3">
									
								</div>
								
							</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>



<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
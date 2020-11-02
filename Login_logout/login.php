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

	if(isset($_POST['loginbtn']))
	{
		$email = $_POST['email'];
		$password=$_POST['password'];

		$user_result = mysqli_query($db,"SELECT * FROM users WHERE email ='$email' AND password='$password'");
		$user_count = mysqli_num_rows($user_result);

		if($user_count == 1)
		{
			header('location:admin_dashboard.php');
		}
		else
		{
			header('location:login.php');
		}

	}

	 ?>

<div class="container my-5">

	<div class="row">

		<div class="col-md-12">

			<div class="card">

				<div class="card-header">
					<div class="card-title">

						<h3>Login Page</h3>

						
						
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
								Login
							</div>
						</div>
						<div class="card-body">

							
							<form action="login.php" method="POST">
								
								<label class="my-3">Email</label>
								<input type="email" name="email" class="form-control">
								
								<label class="my-3">Password</label>
								<input type="password" name="password" class="form-control">
								
								<a href="">
									<button class="btn btn-primary my-3" name="loginbtn">Login</button>
								</a>
								<span class="float-right my-4">
									If you have no account yet, 
								<a href="register.php">register here</a>
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
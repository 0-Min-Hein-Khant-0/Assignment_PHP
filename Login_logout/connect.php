<?php 


	$db = mysqli_connect('localhost','root','','login_registration_system');

	if(!$db)
	{
		die('Error'.mysqli_connect_error());
	}

 ?>
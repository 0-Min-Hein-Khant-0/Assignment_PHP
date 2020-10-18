<?php 


	$severname = "localhost";
	$dbname    = "b18_pos";
	$user      = "root";
	$password  = "";


	$dsn = "mysql:host=$severname; dbname=$dbname";

	$pdo = new PDO($dsn, $user, $password);
	try
	{
		$conn = $pdo;
		//
		$conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//echo "Connected Succefffully";

	}
	catch(PDOException $e)
	{
		echo "Connection Failed".$e->getMessage();
	}



 ?>
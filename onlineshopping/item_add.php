<?php 


	require('db_connect.php');

	$name = $_POST['name'];
	$categories = $_POST['categories'];

//	 var_dump($name);





	// var_dump($categories);

	
	$sql = "INSERT INTO subcategories (name, category_id) VALUES(:value1, :value2)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1', $name);
	$stmt->bindParam(':value2', $categories);
	$stmt->execute();

	header('location:item_list.php');





 ?>
<?php 


	require('db_connect.php');

	$name = $_POST['name'];
	$photo = $_FILES['photo'];

	// var_dump($name);
	// var_dump($photo);

	$source_dir = 'image/category/';

	$filename = mt_rand(100000, 9999999);
	$file_exe_array = explode('.', $photo['name']);
	$file_exe = $file_exe_array[1];

	$fullpatch = $source_dir.$filename.'.'.$file_exe;
	move_uploaded_file($photo['tmp_name'], $fullpatch);

	$sql = "INSERT INTO categories (name, logo) VALUES(:value1, :value2)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':value1', $name);
	$stmt->bindParam(':value2', $fullpatch);
	$stmt->execute();

	header('location:category_list.php');





 ?>
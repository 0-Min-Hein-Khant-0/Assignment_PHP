<!DOCTYPE html>
<html>
<head>
	<title>WKK</title>
	<style type="text/css">
		h1
		{
			color: red;
			font-size: 100px;
			text-align: center;
		}
	</style>
</head>
<body>


	<?php 

	// void Function
	function wkwk($x,$y)
	{
		$total = "<h1>".$x*$y."</h1>";
		echo $total ;
	}

	wkwk(50,50);


 ?>

 <!-- type Function -->

 <?php 

 	function apple($n1,$n2)
 	{

 		$total = $n1 * $n2;
 		return $total;
 	}


 	$out=apple(12,12);
 	echo '<h1>'.$out.'</h1>';


  ?>



  <h1>Min Hein Khant</h1>
  <h1></h1>


</body>
</html>
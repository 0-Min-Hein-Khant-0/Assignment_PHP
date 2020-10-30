<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>




	<form method="POST">


		<label>Num1</label>
		<input type="text" name="num1"><br>
		<label>Num2</label>
		<input type="text" name="num2"><br>
		<select name="operator">

			<option>None</option>
			<option>Add</option>
			<option>Minus</option>
			<option>Into</option>
			<option>Divide</option>
			
		</select>
		<br>
		<button name="submit">Calculate</button>

		

		


	</form>



	<?php 

		if(isset($_POST['submit']))

		{
			$operator=$_POST['operator'];
			$num1    =$_POST['num1'];
			$num2    =$_POST['num2'];



			switch ($operator) {
				case 'None': echo "You need to select method "; break;
				case 'Add':	 echo $num1+$num2;break;
				case 'Minus':echo $num1-$num2;break;

				case 'Into': echo $num1*$num2;break;
				case 'Divide': echo $num1 / $num2; break;
			}
		}

	 ?>






</body>
</html>
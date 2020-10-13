


<table border="1" width="700px" cellpadding="0" cellspacing="0" align="center">

	<?php 

	echo "<center><h1>Chess Table</h1></center>";


	for ($row=1; $row<=8  ; $row++) {


		echo "<tr>";
		for ($col=1; $col<=8  ; $col++) { 

			$totalrc=$row+$col;

			if ($totalrc%2 ==0) {

				echo "<td height=60px width=60px bgcolor=#ffffff></td>";
			}
			else{
				echo "<td height=60px width=60px bgcolor=green></td>";
			}

		}
		echo "</tr>";
	}


	 ?>

	
</table>
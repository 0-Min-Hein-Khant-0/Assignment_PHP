<table border="1" width="700px" cellpadding="0" cellspacing="0">


	<?php 


	echo "Chess Table";


	


	for ($row=1; $row<=8 ; $row++) { 


		echo "<tr>";

		for ($col=1; $col<=8  ; $col++) {

			$total =$row+$col;

			if ($total%2 == 0) {

				echo "<td height=60px width=60px bgcolor=#ffffff></td>";
			}
			else
			{
				echo "<td height=60px width=60px bgcolor=#000000></td>";
			}
	
		}




		echo "</tr>";


		
	}

	




	 ?>
	

</table>
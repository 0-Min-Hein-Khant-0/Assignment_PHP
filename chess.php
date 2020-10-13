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

	
		echo "<table border=1 cellpadding= 10>";
		echo "<tr><td colspan=4><center><b>Slip</b></center></td></tr>";
		echo "<tr><td>Name</td><td>Price</td><td>Qty</td><td>Total Price</td></tr>";
		echo "<tr><td>Hambagar</td><td>$$hambagar</td><td>2</td><td>$$twoham</td></tr>";
		echo "<tr><td>Chocolate MilkShake</td><td>$$chocolatemilkshake</td><td>1</td><td>$$chocolatemilkshake</td></tr>";
		echo "<tr><td>Cocacola </td><td>$$cola</td><td>1</td><td>$$cola</td></tr>";
		echo "<tr><td colspan=3>Total for all menu</td><td>$$totalmenu</td></tr>";
		echo "<tr><td colspan=3>Sale Tax Rate</td><td>$$tax</td></tr>";
		echo "<tr><td colspan=3>Pre-tax Tip</td><td>$$tip</td></tr>";
		echo "<tr><td colspan=3>Total tax and tip </td><td>$$totalall</td></tr>";
		echo "</table>";



	 ?>
	

</table>
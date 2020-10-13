

<?php 


	

	$city =array(
		"NewYork"      => 8175133,
		"LosAngeles"   => 3792621,
		"Chicago"      => 2695598,
		"Houston"      => 2100263,
		"Philadelphia" => 1526006,
		"Phoenix"      => 1445632,
		"SanAntonio"   => 1327407,
		"SanDiego"     => 1307402,
		"Dallas"       => 1197816,
		"SanJose"      => 945942,
);


    ksort($city);
    echo ' <h2>Order By City</h2>
	<table border="1" cellspacing="0px" width="400px">
	<tr>
	<th>City</th>
	<th>Population</th>
	</tr>

	';
	

	foreach ($city as $key => $value ) {


		echo "<tr>";
	    echo"<td>".$key."</td>";
		echo"<td>".$value."</td>";
		echo "</tr>";

		
	}

	

    echo '</table>';



    echo "<hr><br><br>";

     echo ' <h2>Order By Population</h2>
	<table border="1" cellspacing="0px" width="400px">
	<tr>
	<th>City</th>
	<th>Population</th>
	</tr>

	';

	arsort($city);
	foreach ($city as $key => $value ) {

			echo "<tr>";
	    echo"<td>".$key."</td>";
		echo"<td>".$value."</td>";
		echo "</tr>";

		
	}
	


?>
 

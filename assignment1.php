


<?php 

$hamburger1 = 4.95;
$hamburger2 = 4.95;
$milkshake  = 1.95;
$cola       = 85;


$total =$hamburger1+$hamburger2+$milkshake+$cola;

echo "Total is  "."$total"."."."<br><br>";



$saletax = 0.075;

$totalsaletax = $total * $saletax;

echo "Totalsaletax is  "."$totalsaletax"."."."<br><br>";


$pretax = 0.16;



$totalpretax = $total*$pretax;

$taxtotal = $saletax+$totalpretax;

echo "Taxtotal is  "."$taxtotal"."."."<br><br>";


$totaltaxandtip = $totalsaletax+$taxtotal;
echo"Totaltaxandtip is  "."$totaltaxandtip".".";





 ?>

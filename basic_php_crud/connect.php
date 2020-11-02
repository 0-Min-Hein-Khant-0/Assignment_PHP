<?php

$db = mysqli_connect('localhost','root','','techci');

if ($db == false) {
	die('Error'. mysqli_connect_error($db));
}
?>
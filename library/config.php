<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "Padmasambhava_library";


$conn = new mysqli($servername, $username, $password, $db);
if($mysqli -> connect_errno) {
	echo"Failed to connect to Mysql: " . $mysqli -> connect_error;
}
 else {
	 //echo 'success';
}
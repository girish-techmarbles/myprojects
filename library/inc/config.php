<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "Padmasambhava_library";


$conn = mysqli_connect($servername, $username, $password, $db);
session_start();
if ($conn) {
}
else{
	echo "connection failed";
	die('die');
}
?>
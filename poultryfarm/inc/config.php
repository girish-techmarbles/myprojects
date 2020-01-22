<?php
$servername = 'localhost';
$username = 'root';
$password = 'gpassword';
$dbname = 'Flock';

$conn = mysqli_connect($servername,$username,$password,$dbname);

session_start();


if ($conn) {
}
else{
	echo "connection failed";
	die('die');
}
?>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL & ~E_NOTICE);

function pr( $data ) {    
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

$servername ="localhost";
$username ="root";
$password ="gpassword";
$dbname ="attendance";

$GLOBALS['conn'] = mysqli_connect($servername, $username, $password, $dbname);

if ( $GLOBALS['conn']  )  { 
		// conn succeed
} else {
	echo "MySQL database connection failed!Please check your database creds";
	die;
}


?>
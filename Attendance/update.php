<?php

include_once 'config.php'; 

include_once 'function.php'; 


$result = $conn->query("SHOW COLUMNS FROM `employee` LIKE 'email'");   

$result1 = $conn->query("SHOW COLUMNS FROM `employee` LIKE 'phone'");


if( ! $result->num_rows ) {       
	
	$sql = "ALTER TABLE `employee`
	ADD `email` varchar(50) COLLATE 'latin1_swedish_ci' NOT NULL;";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;

	}
}


if( ! $result1->num_rows ){

	$sql = "ALTER TABLE `employee`
	ADD `phone` int(10) NOT NULL;";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;

	}
}


?>
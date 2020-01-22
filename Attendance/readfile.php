<?php
require_once('config.php'); 
require_once('function.php'); 

$employee_csv = fopen("details.csv","r") or die("unable to open file!");
$employees = []; 
$header = fgetcsv( $employee_csv ); 
while ( $row = fgetcsv( $employee_csv ) ) {  

	$employees[] = array_combine( $header, $row );   	 
} 

fclose( $employee_csv ); 



foreach ( $employees as $key => $employee ) { 

	$email = $employee['EmailID'];
	$cardno = $employee['CardNo'];

	if (!empty($email) && !empty($cardno)) {

		
		$updateit= updateemail ($email,$cardno);

	}

}

die('Succesfully Updated Email');
?>

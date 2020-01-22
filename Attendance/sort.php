<?php



//PHP ARRAY - 20 function
//PHP STRING - 20 function
//file handing

//notice
//warning
//fatal error
require_once 'config.php';
require_once 'function.php';

$check_date = "2020-01-09"; 

$count = 5;  

$users_email_status = array();

for( $i = 1; $i <= $count ; $i ++ ) {  
	$user = check_user_timing( $i, $check_date );  

	if(!empty($user)){
		$email = $user['Email'];   
		$uname = $user['Name'];
		$date = $user['date_time'];
		$status = send_email( 'girish.techmarbles@gmail.com' ,  $email , $uname ,$date ) ;
		
		if($status) {
			$users_email_status[$i] = "Email sent successfully to user : ".$uname.", with email :".$email;
		} else {
			$users_email_status[$i] = "Email sent unsuccessful for user : ".$uname.", with email :".$email;
		}
	} else {
		$users_email_status[$i] = "User with ID ".$i." reached on time. So no Warning Email";
	}
}


echo implode($users_email_status, "<br/>");

?>

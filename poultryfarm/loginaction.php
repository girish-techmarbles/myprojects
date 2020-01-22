<?php
require_once 'inc/config.php';
require_once 'inc/function.php';

if( isset( $_POST['submit'] ) ) {  

	$uname = $_POST['username'];  
	$pass  = $_POST['password'];
	$pass1 = md5($pass);

	$sql = "select * from Admin where username='$uname' or email='$uname' and password='$pass1'";
	$result = $conn->query( $sql );
	
	if($result->num_rows == 1) {
		
		$users = $result->fetch_assoc(); 
		$_SESSION['id'] = $userid;
		$_SESSION['username'] = $uname;
		$_SESSION['email'] = $email;

		header("Location: welcome.php");   



	}  else {

		$_SESSION['error'] = 'User Not found!';  

		header("Location: login.php"); 


	}
}
?>
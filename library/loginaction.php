<?php
require_once 'inc/config.php';
require_once 'inc/function.php';
if (isset($_POST["submit"])) {
      $uname = $_POST['uname'];
      $pass = $_POST['psw'];
      $pass1 = md5($pass);
      $sql = "Select * from admin where username='$uname' and password='$pass1'";
      $result = $conn->query($sql);
      if($result ->num_rows == 1) {
      	$user = $result->fetch_assoc();
      	$_SESSION['id'] = $userid;
      	$_SESSION['username'] = $uname;
      	header("location: welcome.php");

      }
      else{

      	$_SESSION['error'] = 'User Not Found!';
      	header("location: login.php");

      }


}
?>
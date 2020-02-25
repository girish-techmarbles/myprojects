<?php
require_once 'inc/config.php';
if(!isset($_SESSION['username'] )) {

	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<style>


body {
    background-image: url("assets/images/padma.jpg");
    
    background-repeat: no-repeat;
    background-size: 100%;
    height: 80%;

  }
		.container {
  padding: 274px;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
#child1 {
    position: absolute;
    top: 0px;
    right: 15px;
    padding: 10px;
  }
h1 {
text-align: center;
background-color: #ff0000;

}

	<title>Admin Login</title>
</style>
</head>
<body>




<div class="container">
	
	<h1>
		<?php
		echo "WELCOME " .$_SESSION['username'] ?> 
	</h1>
	<button class="button1" onclick="window.location.href = 'addcard.php';">ADD CARD </button>
</div>
<div id="child1">
	<a href="logout.php">
		<input type="submit" name="Logout" class="btn-btn-primary" value="Logout">
	</a>
</div>

</body>
</html>

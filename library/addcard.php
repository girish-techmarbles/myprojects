<?php
require_once 'inc/config.php';
require_once 'inc/function.php';
include 'headerfooter/header.php';
if(isset($_SESSION['error']) &&  !empty($_SESSION['error'])){
  echo $_SESSION['error'];
  unset($_SESSION['error']);

}

?>

	
    <h2> Add the New Library Card </h2>
  <div class="form1">

<div class="form">

<form action="upload.php" method="POST" enctype="multipart/form-data">
  <div class="contain">
	<h2> Fill the details </h2>
	<label>CardNumber</label>
	<input class="form-control" name="cardnumber" type="number" value="">
	<label>FirstName</label>
	<input class="form-control" name="firstname" type="text" value="">
	<label>LastName</label>
	<input class="form-control" name="lastname" type="text" value="">
	<label>PhoneNumber</label>
	<input class="form-control" name="phonenumber" type="number" value="">
	<label>Address</label>
	<input class="form-control" name="address" type="text" value="">
	 <input class="new" type="file" name="fileToUpload" id="fileToUpload">
    <input class="submit" type="submit" value="Upload" name="submit">
    <input class="submit" type="button" onclick="window.location.href = 'viewcards.php';" value="ViewCards"/>
</div>
</form>
</div>
</div>
</body>
</html>

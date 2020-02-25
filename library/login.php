
<?php  
include 'inc/config.php';
include 'headerfooter/header.php'; ?>

	<?php if ( isset($_SESSION['error']  )  && !empty($_SESSION['error']) ){ ?> 
		<h1> <?php echo $_SESSION['error']; unset( $_SESSION['error'] );  ?> </h1> 
	<?php  } ?> 




<h2> Padmasambhava Admin </h2>
<form action="loginaction.php" method="POST">
	<div class="imgcontainer">
		<img src="assets/images/face.jpg" alt="Avatar" class="avatar">
	</div>
	<div class="container">
		<label for="uname"> <b> Username </b> </label>
		<input type="text" placeholder="Enter Username" name="uname" required>
		<label for="psw"><b>Password </b> </label>
		<input type="password" placeholder="Enter Password" name="psw" required>
		<button type="submit" name="submit"> Login </button>
	</div>
	<div class="container" style="background-color: #f1f1f1">
		<button type="button" class="cancelbtn"> Cancel </button>
		<span class="psw">Forgot <a href="#">Password? </a> </span>
	</div>
</form>

<?php    
include 'headerfooter/footer.php';
?>
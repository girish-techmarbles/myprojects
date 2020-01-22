<?php  
include 'inc/config.php';
include 'headerfooter/header.php'; ?>

<div class="container">
	<?php if ( isset($_SESSION['error']  )  && !empty($_SESSION['error']) ){ ?> 
		<h2> <?php echo $_SESSION['error']; unset( $_SESSION['error'] );  ?> </h2> 
	<?php  } ?> 

	<h2>Admin Login Form</h2>
	<form action="loginaction.php" method="POST">
		<div class="form-group">
			<label for="username">Email/Username:</label>
			<input type="text" class="form-control" id="email" placeholder="Enter email or Username" name="username">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
		</div>

		<button type="submit" class="btn btn-primary" name="submit" value="1">Submit
		</button>
	</form>
</div>


<?php    
include 'headerfooter/footer.php';

?>
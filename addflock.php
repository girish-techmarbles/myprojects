<?php
require_once 'inc/config.php';
require_once 'inc/function.php';
include 'headerfooter/header.php';
if( isset( $_POST['submit'] ) ) {  

	$fname = $_POST['flockname'];  
	$tbirds = $_POST['totalbirds'];
	$blife = $_POST['birdlife'];
	$productionstart = $_POST['startdays'];
	$totalfeed = $_POST['feedquantity'];
	$ftoday = $_POST['feedtoday'];
	$dailyegg = $_POST['dailyeggs'];



	$sql = "INSERT INTO enteries (flockname, totalbirds, birdlife, startdays, feedquantity, feedtoday, dailyeggs)
	VALUES ('$fname','$tbirds','$blife','$productionstart','$totalfeed','$ftoday','$dailyegg')";
	$result = $conn->query( $sql );

}

?>

<div class="form1">
	<div class="form_div">

		<h2>Insert the details of the Flock</h2>
		<form action="" method="POST">
			<!-- Method can be set as POST for hiding values in URL-->
			<h2>User Input:-</h2>
			<label>New Flock Name:</label>
			<input class="form-control" name="flockname" type="text" value="">
			<label>Total number of birds in flock:</label>
			<input class="form-control" name="totalbirds" type="number" value="">
			<label>Life of Bird:</label>
			<input class="form-control" name="birdlife" type="number" value="">
			<label>Production start:</label>
			<input class="form-control" name="startdays" type="number" value="">
			<label>Total feed quantity:</label>
			<input class="form-control" name="feedquantity" type="number" value="">
			<label>Feed used today:</label>
			<input class="form-control" name="feedtoday" type="number" value="">
			<label>Daily eggs:</label>
			<input class="form-control" name="dailyeggs" type="number" value="">
			<input class="submit" name="submit" type="submit" value="Insert">
			<input class="submit" type="button" onclick="window.location.href = 'viewflocks.php';" value="Viewflocks"/>
			<!-- <input class="submit" name="view" type="submit" value="Viewflocks" onclick="window.location.href='viewflocks.php';"> -->
		</form>
	</div>
</div>
<?php
include 'headerfooter/footer.php';
?>

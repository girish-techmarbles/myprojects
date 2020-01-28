<?php
require_once 'inc/config.php';
require_once 'inc/function.php';
include 'headerfooter/header.php';



if(isset($_POST['Update']) && $_POST['Update']== 'update' )
{



	$idget =$_POST['ID'];
	$fname =$_POST['flockname'];
	$tbird =$_POST['totalbirds'];
	$blife =$_POST['birdlife'];
	$pstart =$_POST['startdays'];
	$fquantity =$_POST['feedquantity'];
	$ftoday =$_POST['feedtoday'];
	$deggs =$_POST['dailyeggs'];
	$update="UPDATE enteries set flockname='".$fname."',totalbirds='".$tbird."', birdlife='".$blife."',startdays='".$pstart."',
	feedquantity='".$fquantity."',feedtoday='".$ftoday."',dailyeggs='".$deggs."'
	WHERE id ='$idget'";
	$result1 = $conn->query( $update );
	if($result1 == true)
	{
		header("Location: viewflocks.php");

	}
	else{
    // do nothing, continue with page
	}

}



if(isset($_GET['id'])){


	$id = $_GET['id'];
	$sql ="select * from enteries where id='$id'";
	$result = $conn->query($sql);
	$new = $result->fetch_assoc();

}

?>

<div class="form1">
	<div class="form_div">

		<h2>Insert the details of the Flock</h2>
		<form action="edit.php" method="POST">

			<h2>User Input:-</h2>
			<input type="hidden" name="ID" value="<?php echo $new['id']; ?>">

			<label>New Flock Name:</label>
			<input class="form-control" name="flockname" type="text" value="<?php echo $new['flockname']; ?> ">
			<label>Total number of birds in flock:</label>
			<input class="form-control" name="totalbirds" type="number" value="<?php echo $new['totalbirds']; ?>">
			<label>Life of Bird:</label>
			<input class="form-control" name="birdlife" type="number" value="<?php echo $new['birdlife'];?>">
			<label>Production start:</label>
			<input class="form-control" name="startdays" type="number" value="<?php echo $new['startdays'];?>">
			<label>Total feed quantity:</label>
			<input class="form-control" name="feedquantity" type="number" value="<?php echo $new['feedquantity'];?>">
			<label>Feed used today:</label>
			<input class="form-control" name="feedtoday" type="number" value="<?php echo $new['feedtoday'];?>">
			<label>Daily eggs:</label>
			<input class="form-control" name="dailyeggs" type="number" value="<?php echo $new['dailyeggs'];?>">

			<input class="submit" name="Update" type="submit" value="update">

			<input class="submit" type="button" onclick="window.location.href = 'viewflocks.php';" value="Viewflocks"/>
		</form>
	</div>
</div>



<?php
include 'headerfooter/footer.php';
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'inc/config.php';
require_once 'inc/function.php';
include 'headerfooter/header.php';

if(isset($_POST['Update']) && $_POST['Update']== 'update' )
{



	$idget =$_POST['ID'];
	$cardnumber =$_POST['cardnumber'];
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$phone =$_POST['phonenumber'];
	$Address =$_POST['address'];
	// pr($address);
	// die('asa');
	$update= "UPDATE Card set cardnumber= '".$cardnumber."',firstname='".$firstname."', lastname='".$lastname."',phonenumber=".$phone.",address='".$Address."' WHERE id =".$idget;

	$result1 = $conn->query( $update );
	if($result1 == true)
	{
		header("Location: viewcards.php");

	}
	else{
    // do nothing, continue with page
	}

}



if(isset($_GET['id'])){


	$id = $_GET['id'];
	$sql ="select * from Card where id=".$id."";
	$result = $conn->query($sql);
	$new = $result->fetch_assoc();


	


}

?>
<h2>EDIT THE LIBRARY CARD</h2>
<div class="form1">
	<div class="form">

		
		<form action="edit.php" method="POST">
			<div class="contain">

			<h2>Edit Details </h2>
			<input type="hidden" name="ID" value="<?php echo $new['id']; ?>">

			<label>CardNumber</label>
			<input class="form-control" name="cardnumber" type="text" value="<?php echo $new['cardnumber']; ?> ">
			<label>FirstName</label>
			<input class="form-control" name="firstname" type="text" value="<?php echo $new['firstname']; ?>">
			<label>LastName</label>
			<input class="form-control" name="lastname" type="text" value="<?php echo $new['lastname'];?>">
			<label>PhoneNumber</label>
			<input class="form-control" name="phonenumber" type="number" value="<?php echo $new['phonenumber'];?>">
			<label>Address</label>
			<input class="form-control" name="address" type="text" value="<?php echo $new['address'];?>">
			

			<input class="submit" name="Update" type="submit" value="update">

			<input class="submit" type="button" onclick="window.location.href = 'viewcards.php';" value="ViewCards"/>
		</form>
	</div>
</div>



<?php
include 'headerfooter/footer.php';
?> 
<?php
require_once 'inc/config.php';
require_once 'inc/function.php';
if(isset($_GET['id']))
{

	$id= $_GET['id'];
	$query1= "DELETE FROM enteries WHERE id='$id'";
	$result2 = $conn->query($query1);
	if($query1 == true)
	{
		header('location:viewflocks.php');
	}
}
?>
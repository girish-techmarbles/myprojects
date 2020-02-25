<?php
require_once'inc/config.php';
require_once'inc/function.php';
include'headerfooter/header.php';

$sql = "SELECT * from Card";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Flock Enteries</title>
</head>
<body>
	<table bgcolor="lightblue" align="center" border="1px" style="width: 1000px; line-height:35px">
		<tr>
			<th colspan ='10' > <h2> Card Details </h2> </th>
		</tr>
		<tr>
<th> Card Number </th>
<th> First Name </th>
<th> Last Name </th>
<th> Phone Number </th>
<th> Address </th>

		</tr>
		<?php
		while ($row=$result->fetch_assoc()) {
	?>
	<tr>
		<td> <?php echo $row['cardnumber']; ?> </td>
		<td> <?php echo $row['firstname']; ?> </td>
		<td> <?php echo $row['lastname']; ?> </td>
		<td> <?php echo $row['phonenumber']; ?> </td>
		<td> <?php echo $row['address']; ?> </td>
		<td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
				<td><a onclick="deleteme(<?php echo $row["id"]; ?>)">Delete</a></td>
</tr>
<script language="javascript">
				function deleteme(id)
				{
					if (confirm("Do you want to delete!")) {

						window.location.href='delete.php?id=' +id+'';
						return true;

					}
				}



			</script>
				<?php

		}	

		?>


	</table>
</body>
</html>
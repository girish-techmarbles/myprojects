<?php
require_once 'inc/config.php';
require_once 'inc/function.php';
$sql ="select * from enteries";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Flock Enteries</title>
</head>
<body>
	<table bgcolor="lightblue" align="center" border="1px" style="width: 1000px; line-height:35px;">
		<tr>
			<th colspan="10"> <h2> FLOCK RECORD </h2> </th>
		</tr>
		<tr>
			<th>ID </th>
			<th>Flock Name </th>
			<th>Total Birds </th>
			<th>Life of Bird </th>
			<th>Production Start </th>
			<th>Total Feed </th>
			<th>Feed Used Today </th>
			<th>Daily eggs </th>
			<th>Edit </th>
			<th>Delete</th>
		</tr>
		<?php
		while($row =$result->fetch_assoc()){
			?>
			<tr>
				<td> <?php echo $row['id']; ?> </td>
				<td> <?php echo $row['flockname']; ?> </td>
				<td> <?php echo $row['totalbirds']; ?> </td>
				<td> <?php echo $row['birdlife']; ?> </td>
				<td> <?php echo $row['startdays']; ?> </td>
				<td> <?php echo $row['feedquantity']; ?> </td>
				<td> <?php echo $row['feedtoday']; ?> </td>
				<td> <?php echo $row['dailyeggs']; ?> </td>
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
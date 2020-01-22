<!DOCTYPE html>
<html>
<head>
	<style>
		input {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		h2 {
			color: red;
		}
		input [type=submit] {
			background-color: #4CAF50;
		}
	</style>
</head>
<body>
	<h2> Attendance Form </h2>
	<form action="index.php" mehod="POST">
		User Id: <input type="int" name="id"><br>
		Name : <input type="text" name="name"><br>
		<input type="submit">
	</form>
</body>
</html>
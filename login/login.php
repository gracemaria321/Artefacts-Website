<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\login">
</head>
<body>
	<div id="form">
		<form action="process.php" method="POST">
			<table>
	<tr>
		<td>Username:</td>
	<td>
		<input type="text" name="uname" required>
	</td>
	</tr>
	<tr>
		<td>Password:</td>
	<td>
		<input type="Password" name="Password" required>
	</td>
	</tr>
	<td>
		<p>
		<center>
			<input type="submit" id="btn" value="LOGIN" required>
		</center>
		</p>
		<a href="C:\xampp\htdocs\form">New Registration</a>
	</td>
	</table>	
		</form>
	</div>
</body>
</html>
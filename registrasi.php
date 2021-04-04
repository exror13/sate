<?php 
require "rkonek.php";
if (isset($_POST["sate"])) {
	# code...
	if (sate($_POST)) {
		# code...
		echo"
		<script>
		alert('Data Berhasil Ditambahkan');
		</script>
		";
	}
	else{
		echo mysqli_error($conn);
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<div>
	<h2>Silahkan Registrasi Disini</h2>

<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required></td>
		</tr>
		<tr>
			<td>Konfirmasi Password</td>
			<td><input type="password" name="password2" required></td>
		</tr>
		<tr>
			<td>Level</td>
			<td><select name="level">
				<option>admin</option>
				<option>umum</option>
				<option>petugas</option>
			</select></td>
		</tr>
		<tr>
			<td><button type="submit" name="sate">Submit</button>
				<button type="reset">Reset</button></td>
		</tr>

	</table>
	<h5>sudah registrasi?<a href="login.php">login</h5>
</form>
</div>
</body>
</html>
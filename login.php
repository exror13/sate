<?php 
require "lkonek.php";
if (isset($_POST["masuk"])) {
	# code...
	if (masuk($_POST)) {
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
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<div>
	<h2>Silahkan Login Disini</h2>

<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><button type="submit" name="masuk">Submit</button>
				<button type="reset">Reset</button></td>
		</tr>

	</table>
	<h5>belum memiliki akun?<a href="registrasi.php">klik disini</h5>
</form>
</div>
</body>
</html>
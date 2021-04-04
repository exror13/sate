<?php  
$conn = mysqli_connect("localhost","root","","layanan");
function sate($data)
{
	global $conn;

	$username = mysqli_real_escape_string($conn, $data["username"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$level = mysqli_real_escape_string($conn, $data["level"]);

	$user = mysqli_query($conn, "SELECT * FROM User WHERE username='$username'");

if ($user->num_rows >= 1)
 {
		echo "
		<script>
		alert('user tidak terdaftar');
		</script>
		";
		# code...
	
	return false;
}
	if ($password !== $password2) 
	{
		echo "
		<script>
		alert('konfirmasi Password tidak Sesuai!!');
		</script>
		";
		return false;
	}
	

		mysqli_query($conn, "INSERT INTO `User`(`id`, `username`, `password`, `level`) VALUES ('','$username','$password','$level');");
	return true;

}
?>
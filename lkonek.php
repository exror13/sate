<?php  
$conn = mysqli_connect("localhost","root","","layanan");
function masuk($data)
{
	global $conn;

	$username = mysqli_real_escape_string($conn, $data["username"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$user = mysqli_query($conn, "SELECT * FROM User WHERE username='$username' AND password='$password'");

if ($user->num_rows != 1)
 {
		echo "
		<script>
		alert('user tidak terdaftar');
		</script>
		";
		# code...
	
	return false;
}
$level = $user->fetch_assoc()['level'];
if ($level==="admin")
	header("location: admin.php");
elseif ($level==="umum")
	header("location: umum.php");
else
	header("location: petugas.php");
	return true;

}
?>
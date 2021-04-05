<?php
//Get Data From URL
$data=$_GET['ID'];

//Koneksi 
$connect=mysqli_connect("localhost", "root", "", "db_pembayaran_listrik");
$remove =mysqli_query($connect, "DELETE FROM tbl_pelanggan WHERE id='$data'");
if($remove){
	echo "<h3 align='center'>Data Berhasil Dihapus. <a href='pelanggan.php'>Ok</a></h3>";
}
else{
	echo "<h3 align='center'>Terjadi Kesalahan. <a href='pelanggan.php'>Coba Lagi</a></h3>";
}
?>
<?php
//Get Data From URL
$data=$_GET['ID'];

//Koneksi
$connect=mysqli_connect("localhost", "root", "", "db_pembayaran_listrik");
$select =mysqli_query($connect, "SELECT * FROM tbl_pelanggan WHERE id='$data'");
$split=mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Pelanggan</title>
		<!-- Panggil CSS -->
		<link rel="stylesheet" type="text/css" href="../css/asw.css">
	</head>
	<body>
		<h3 align="center">Halaman Pelanggan</h3><hr width="430">

		<!-- Navigasi -->
		<div align="center">
			<a href="../dashboard.php">Dashboard</a> | <a href="pelanggan.php">Pelanggan</a> | <a href="../pembayaran/pembayaran.php">Pembayaran</a> | <a href="../tagihan/tagihan.php">Tagihan</a> | <a href="../tarif/tarif.php">Tarif</a>
		</div>
		<!-- Akhir Navigasi -->

		<!-- Form Daftar Pelanggan Baru -->
		<div id="daftar-pelanggan">
			<h4>Edit Data Pelanggan</h4>
			<form method="post">
				<table>
					<tr>
						<td><label>Id Pelanggan</label></td>
						<td><input type="text" name="txtid" value="<?php echo $split['id'];?>"></td>
					</tr>
					<tr>
						<td><label>Nama</label></td>
						<td><input type="text" name="txtnama" value="<?php echo $split['name'];?>"></td>
					</tr>
					<tr>
						<td><label>Alamat</label></td>
						<td><textarea name="txtalamat"><?php echo $split['alamat'];?></textarea></td>
					</tr>
					<tr>
						<td><label>Kode Tarif</label></td>
						<td><input type="text" name="txtkodetarif" value="<?php echo $split['kode_tarif'];?>"></td>
					</tr>
					<tr>
						<td><button type="submit" name="btnedit">Edit Data</button></td>
					</tr>
				</table>
			</form>
		</div>
		<!-- End -->
		<?php
		//Get Data From URL
		$data=$_GET['ID'];

		//Script Update Data
		$connect=mysqli_connect("localhost", "root", "", "db_pembayaran_listrik");

		//Jika Tombol Edit Diklik
		if(isset($_POST['btnedit'])){
			$id    =$_POST['txtid'];
			$nama  =$_POST['txtnama'];
			$alamat=$_POST['txtalamat'];
			$kode  =$_POST['txtkodetarif'];
			$updateData=mysqli_query($connect, "UPDATE tbl_pelanggan SET id='$id', name='$nama', alamat='$alamat', kode_tarif='$kode' WHERE id='$data'");
			if($updateData){
				echo "<h4 align='center'>Update Data Berhasil. <a href='pelanggan.php'>Kembali</a></h4>";
			}
			else{
				echo "<h4 align='center'>Terjadi Kesalahan. <a href='pelanggan.php'>Coba Lagi</a></h4>";
			}
		}
		?>
	</body>
</html>
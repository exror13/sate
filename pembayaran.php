<html>
<head>
    <title>Title here!</title>
</head>
    <form action="dashboard.php" method="post">
    <font color=green><strong>
	    <table border=0 align=center>
		    <td colspan=2 align=center> Data Pembayaran</td>
		    <tr>
		       <td>id_pembayaran:</td><td><input type="text" name="Id" size=20></td>
		    </tr>
		    <tr>
		       <td>id_petugas:</td><td><input type="text" name="id"></td>
		    </tr>
		    <tr>
		       <td>nisn:</td><td><input type="text" name="nisn"></td>
		    </tr>
		    <tr>
		       <td>tgl_bayar:</td><td><input type="text" name="tgl" size=20></td>
		    </tr>
		    <tr>
			   <td>bulan_dibayar:</td><td><input type="text" name="bulan_dibayar" size=20></td>
		    </tr>
		    <tr>
			   <td>tahun_dibayar:</td><td><input type="text" name="tahun_dibayar" size=20></td>
		    </tr>
		    <tr>
			   <td>id_spp:</td><td><input type="text" name="id_spp" size=20></td>
		    </tr>
		    <tr>
			   <td>jumlah_bayar:</td><td><input type="text" name="jumlah_bayar" size=20></td>
		    </tr>
		    <tr>
		    <tr></tr>
			<tr>
		       <td colspan=2 align=center><input type="submit" value="SIMPAN">
			                              <input type="submit" value="EDIT">
			                              <input type="reset" value="HAPUS"></td>
		    </tr>
		</table>
	</font></strong>
</form>
</body>
</html>

<!-- Data Pelanggan-->
		<div id="data-pelanggan">
			<h4 align="center">Data pembayaran</h4><hr width="430" style="color: white;">
			<table class="table-pelanggan">
				<tr class="row-header">
					<td><b>id_pembayaran</b></td>
					<td><b>id_petugas</b></td>
					<td><b>nisn</b></td>
					<td><b>tgl_bayar</b></td>
					<td><b>bulan_dibayar</b></td>
					<td><b>tahun_dibayar</b></td>
					<td><b>id_spp</b></td>
					<td><b>jumlah_bayar</b></td>
				</tr>
				<?php
			//Script Tampil Data

			//Koneksi
			$connect=mysqli_connect("localhost", "root", "", "db_spp");
			$querydb=mysqli_query($connect,"SELECT * FROM pembayaran");
			for($a=1;$a<=$splitData=mysqli_fetch_array($querydb);$a+=1){
				echo "<tr style='height:25px;'>";
				echo "<td>$a</td>";
				echo "<td>".$splitData['id_pembayaran']."</td>";
				echo "<td>".$splitData['id_petugas']."</td>";
				echo "<td>".$splitData['nisn']."</td>";
				echo "<td>".$splitData['tgl_bayar']."</td>";
				echo "<td>".$splitData['bulan_dibayar']."</td>";
				echo "<td>".$splitData['tahun_dibayar']."</td>";
				echo "<td>".$splitData['id_spp']."</td>";
				echo "<td>".$splitData['jumlah_bayar']."</td>";
				echo "<td><a href='hapus.php?ID=".$splitData['nisn']."'>Hapus</a> | <a href='edit.php?ID=".$splitData['nisn']."'>Edit</a></td>";
				echo "</tr>";
			}

			//Script Input Data
			if(isset($_POST['btnregistrasi'])){
				$id_pembayaran      =$_POST['id_pembayaran'];
				$id_petugas	        =$_POST['id_petugas'];
				$nisn               =$_POST['nisn'];
				$tgl_bayar          =$_POST['tgl_bayar'];
				$bulan_dibayar      =$_POST['bulan_dibayar'];
				$tahun_dibayar      =$_POST['tahun_dibayar'];
				$id_spp             =$_POST['id_spp'];
				$jumlah_bayar       =$_POST['jumlah_bayar'];
				$insertData=mysqli_query($connect, "INSERT INTO siswa (id_pembayaran,id_petugas,nisn,tgl_bayar,bulan_dibayar,tahun_dibayar,id_spp,jumlah_dibayar,level) VALUES ('$id_pembayaran', '$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')");
				if($insertData){
					echo "<center>Registrasi Berhasil. <a href='siswa.php'>Ok</a></center>";
				}
				else{
					echo "<center>Terjadi Kesalahan. <a href='siswa.php'>Coba Lagi</a></center>";	
				}
			}
			?>
			</table>	
		</div>
		<!-- End -->
	</body>
</html>


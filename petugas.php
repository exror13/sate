<html>
<head>
    <title>Title here!</title>
</head>
    <form action="dashboard.php" method="post">
    <font color=#FFFFFF><strong>
	    <table border=25 align=center>
		    <td colspan=2 align=center> Data Petugas</td>
		    <tr>
		       <td>id_petugas:</td><td><input type="text" name="Id" size=20></td>
		    </tr>
		    <tr>
		       <td>username:</td><td><input type="text" name="username"></td>
		    </tr>
		    <tr>
		       <td>password:</td><td><input type="text" name="password"></td>
		    </tr>
		    <tr>
		       <td>nama_petugas:</td><td><input type="text" name="nama" size=20></td>
		    </tr>
		    <tr>
			   <td>level:</td><td><input type="text" name="level"></td>
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
			<h4 align="center">Data petugas</h4><hr width="430" style="color: white;">
			<table class="table-pelanggan">
				<tr class="row-header">
					<td><b>id_petugas</b></td>
					<td><b>username</b></td>
					<td><b>password</b></td>
					<td><b>nama_petugas</b></td>
					<td><b>level</b></td>
					
					</tr>
				<?php
			//Script Tampil Data

			//Koneksi
			$connect=mysqli_connect("localhost", "root", "", "db_sppp");
			$querydb=mysqli_query($connect,"SELECT * FROM petugas");
			for($a=1;$a<=$splitData=mysqli_fetch_array($querydb);$a+=1){
				echo "<tr style='height:25px;'>";
				echo "<td>$a</td>";
				echo "<td>".$splitData['id_petugas']."</td>";
				echo "<td>".$splitData['username']."</td>";
				echo "<td>".$splitData['password']."</td>";
				echo "<td>".$splitData['nama_petugas']."</td>";
				echo "<td>".$splitData['level']."</td>";
				echo "<td><a href='hapus.php?ID=".$splitData['nisn']."'>Hapus</a> | <a href='edit.php?ID=".$splitData['nisn']."'>Edit</a></td>";
				echo "</tr>";
			}

			//Script Input Data
			if(isset($_POST['btnregistrasi'])){
				$id_petugas     =$_POST['id_pembayaran'];
				$username       =$_POST['id_petugas'];
				$password       =$_POST['nisn'];
				$nama_petugas   =$_POST['tgl_bayar'];
				$level          =$_POST['bulan_dibayar'];
				$insertData=mysqli_query($connect, "INSERT INTO siswa (id_petugas,username,password,nama_petugas,level,) VALUES ('$id_petugas', '$username', '$password', '$nama_petugas', '$level')");
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




import java.util.scanner
\\\\\\{
	public static void main(String[] args) {

		Scanner scanner = new Scanner(System.in);
		String bba;
		do{
			sout("slip gaji karyawan");
			sout("==================================");
// gk pke ln print aja ln nya hapus
// \t\t = untuk merapihkan barisan
			sout("nama karyawan\t\t : ");
// gunakan string untuk huruf
// gunakan (scanner.next) untuk string
			String nama = scanner.next();
//untuk tampilan hasil
			sout("nama karyawan\t\t : " + nama);

// ulangi sampe semuanya
			sout("Gaji Pokok\t\t\t : ");
// gunakan int untuk angka
 // gunakan (scanner.nextInt)untuk Int
			int gaji = scanner.next();

			sout("Gaji Pokok\t\t\t : " + gaji);

			sout("Tunjangan Jabatan\t : ");
			int jabatan = scanner.nextInt();

			sout("Tunjangan Jabatan\t : " + jabatan);

			sout("Tunjangan Pendidikan\t : ");
			int pendidikan = scanner.nextInt();

			sout("Tunjangan Pendidikan\t : " + pendidikan);


			sout("Honor\t : ");
			int honor = scanner.nextInt();

			sout("Honor\t : " + honor);

// untuk menjumlahkan hasil
			int jumlah = gaji + jabatan + pendidikan + honor;

// untuk hasil Akhir
			sout("===============================");
			sout("Total Gaji Bersih\t : " +jumlah);

			sout("ingin input lagi?? [Y/T]");
			bba = scanner.next();

		}while(bba.equalsIgnoreCase("y"));
	}
}
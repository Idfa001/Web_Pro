<?php 

include("config.php");

// cek apakah tombol daftar sudah di klik atau belum?
if (isset($_POST['input'])) {
	
	//ambil data dari masukan laporan
	$nama = $_POST['nama'];
	$no_hp = $_POST['no_hp'];
	$bulan = $_POST['bulan'];
	$pemasukan = $_POST['pemasukan'];
	$tagihan = $_POST['tagihan'];
	$saldo = $_POST['saldo'];
	$keterangan = $_POST['keterangan'];
	$lain_lain = $_POST['lain_lain'];


	//buat query
	$sql = "INSERT INTO wifi (nama, no_hp, bulan, pemasukan, tagihan, saldo, keterangan, lain_lain) VALUE ('$nama', '$no_hp','$bulan','$pemasukan','$tagihan', '$saldo', '$keterangan', '$lain_lain')";
	$query = mysqli_query($db, $sql);

	//apakah query simpan berhasil?
	if ($query) {
		//kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: dashboard_admin.php?status=sukses');
	} else {
		//kalau gagal alihkan kehalaman index.php dengan status=gagal
		header('Location: dashboard_admin.php?status=gagal');
	}
} else {
	die("Akses Dilarang..!!!");
}



 ?>
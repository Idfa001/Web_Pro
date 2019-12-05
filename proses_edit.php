<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $bulan = $_POST['bulan'];
    $pemasukan = $_POST['pemasukan'];
    $tagihan = $_POST['tagihan'];
    $saldo = $_POST['saldo'];
    $keterangan = $_POST['keterangan'];
    $lain_lain = $_POST['lain_lain'];


    //buat query
    $sql = "UPDATE wifi SET nama='$nama', no_hp='$no_hp', bulan='$bulan', pemasukan='$pemasukan', tagihan='$tagihan',saldo='$saldo', keterangan='$keterangan', lain_lain='$lain_lain' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: view.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
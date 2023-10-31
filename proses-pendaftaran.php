<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jk = $_POST['Jenis_Kelamin'];
    $agama = $_POST['Agama'];

    // buat query
    $sql = "INSERT INTO calon_siswa (Nama, Alamat, Jenis_Kelamin, Agama) VALUE ('$nama', '$alamat', '$jk', '$agama')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
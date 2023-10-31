<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jk = $_POST['Jenis_Kelamin'];
    $agama = $_POST['Agama'];

    // buat query update
    $sql = "UPDATE calon_siswa SET Nama='$nama', Alamat='$alamat', Jenis_Kelamin='$jk', Agama='$agama' WHERE Id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){


    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    // buat query update
    $sql = "UPDATE tbl_teman SET nama='$nama', alamat='$alamat', jk='$jk', telepon='$telepon', email='$email', tanggal_lahir='$tanggal_lahir' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
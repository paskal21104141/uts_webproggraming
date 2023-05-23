<?php

include("koneksi.php");
if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $sql = "INSERT INTO tbl_teman (id,nama, alamat, jk, telepon,email,tanggal_lahir) VALUE ('$id','$nama', '$alamat', '$jk', '$telepon', '$email','$tanggal_lahir')";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
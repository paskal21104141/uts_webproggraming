<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_teman WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Data-Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Data</h3>
    </header>

    <form action="proses_update.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jk">Jenis Kelamin: </label>
            <input type="text" name="jk" placeholder="Jenis Kelamin" value="<?php echo $siswa['jk'] ?>" />
        </p>
        <p>
            <label for="telepon">Telepon: </label>
            <input type="text" name="telepon" placeholder="Telepon" value="<?php echo $siswa['telepon'] ?>" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Email" value="<?php echo $siswa['email'] ?>" />
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $siswa['tanggal_lahir'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
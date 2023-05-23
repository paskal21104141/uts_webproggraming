<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru </title>
</head>

<body>
    <header>
        <h3>Mahasiswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="register.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>telepon</th>
            <th>email</th>
            <th>tanggal lahir</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tbl_teman";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jk']."</td>";
            echo "<td>".$siswa['telepon']."</td>";
            echo "<td>".$siswa['email']."</td>";
            echo "<td>".$siswa['tanggal_lahir']."</td>";


            echo "<td>";
            echo "<a href='Update.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='proses_hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru </title>
</head>

<body>
    <header>
        <h3>Pendataan Mahasiswa</h3>
        <h1>Instiki</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="register.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Mahasiswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Mahasiswa Baru </title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>
        <p>
            <label for="id">Id: </label>
            <input type="text" name="id" placeholder="id" />
        </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jk">Jenis Kelamin: </label>
            <label><input type="radio" name="jk" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jk" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="telepon">Nomor Telepon: </label>
            <input type="text" name="telepon" placeholder="nomor telepon" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="email" />
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar Boostrap</title>

    <!--Memanggil Bootstarp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="bg-warning py-5">
        <div class="container">
            <h1 class="display-5 text-while">BIODATA</h1>
            <p class="lead">Silahkan Masukan Data</p>
        </div>
    </header>
    <p></p>
    <form action="" method="post">
      <table>
        <tr>
          <td width="130">id</td>
          <td><input type="text" name="id"></td>
</tr>
<tr>
  <td> Nama </td>
  <td><input type="text" name="nama"></td>
</tr>
<tr>
  <td> Alamat </td>
  <td><input type="text" name="alamat"></td>
</tr>
<tr>
  <td> Jenis Kelamin </td>
  <td><input type="text" name="jk"></td>
</tr>
<tr>
  <td> Phone </td>
  <td><input type="text" name="phone"></td>
</tr>
<tr>
  <td> Email</td>
  <td><input type="text" name="email"></td>
</tr>
<tr>
  <td> Tanggal Lahir</td>
  <td><input type="text" name="tgl_lahir"></td>
</tr>
  <td></td>
  <td><input type="submit" value="Input" name="proses"></td>
</table>
  </form>
    </body>
</html>
<?php 

include "datadiri.php";

if(isset($_POST['proses'])){
    mysqli_query($datadiri, "insert into data set
    id = '$_POST[id]',
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    jk = '$_POST[jk]',
    phone = '$_POST[phone]',
    email = '$_POST[email]',
    tgl_lahir = '$_POST[tgl_lahir]'");

echo "Data Diri Telah Terinput";


}

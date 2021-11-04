<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Siswa - Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<?php
    include './ConnectToDatabase.php';
    $id_siswa = $_GET["id_buku"];

    $sql = "SELECT * FROM buku WHERE id_siswa=" . $id_siswa;
    $result = $conn->query($sql) or die($conn->error);

    $result = $result->fetch_assoc();
?>

<style>
        body {
          background-image: url('https://www.thoughtco.com/thmb/kJXvM-MeeQLK8kqAcmeQuqTtzds=/1887x1415/smart/filters:no_upscale()/184848787-56a9e2053df78cf772ab37c2.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style>

<title>Database Siswa - Update</title>
<center>
<h1>Update Data Siswa</h1>

<form action="Update.php" method="post">
    <input type="hidden" name="id_buku" value="<?php echo $result['id_siswa']?>">
    <table>
        <tr>
            <td>NIS Siswa</td>
            <td>:</td>
            <td><input type="text" name="nis" class="form-control" placeholder="Enter NIS" value="<?php echo $result['nis']?>"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa" class="form-control" placeholder="Enter Nama" value="<?php echo $result['nama_siswa']?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" class="form-control" placeholder="Enter Gender" value="<?php echo $result['jenis_kelamin']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td> 
            <td>:</td>
            <td><textarea type="text" name="alamat" class="form-control" placeholder="Enter Address" value="<?php echo $result['alamat']?>"></textarea></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="id_jurusan" class="form-control" placeholder="Enter Jurusan" value="<?php echo $result['id_jurusan']?>"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="Update Data">
</form>
</center>
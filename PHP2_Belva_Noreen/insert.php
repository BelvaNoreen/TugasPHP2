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
    session_start()
?>
<style>
        body {
          background-image: url('https://wallpapercave.com/wp/QLnDcJB.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style>

<!DOCTYPE html>
<html>
    <center>
    <head>
        <title>Database Siswa - Create</title>
    </head>
    <body>
        <h1>Insert Data Siswa</h1>
        <form action="doAddSiswa.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>NIS Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nis" class="form-control" placeholder="Enter NIS"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_siswa" class="form-control" placeholder="Enter Nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="text" name="jenis_kelamin" class="form-control" placeholder="Enter Gender"></td>
                </tr>
                <tr>
                    <td>Alamat</td> 
                    <td>:</td>
                    <td><textarea type="text" name="alamat" class="form-control" placeholder="Enter Address"></textarea></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="id_jurusan" class="form-control" placeholder="Enter Jurusan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button>Save Data</button></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_SESSION["message"])){
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            }
        ?>
    </body>
</html>
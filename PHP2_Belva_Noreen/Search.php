<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Siswa - Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <style>
        body {
          background-image: url('https://wallpapercave.com/wp/J4DhxBj.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style>
    <body>
        <center>
        <div class="container">
            <h2>Select Page</h2>
                <form action="SearchResults.php" method="post">
                    <div class="form-group">
                        <label for="sel1">Data list (select one):</label>
                        <select name="Column" class="form-control" id="sel1">
                            <option value="nis">NIS</option>
                            <option value="nama_siswa">Nama Siswa</option>
                            <option value="jenis_kelamin">Jenis Kelamin</option>
                            <option value="alamat">Alamat</option>
                            <option value="id_jurusan">Jurusan</option>
                        </select>
                        <div class="container">
    <form>
    <div class="form-group">
      <label for="usr">Search:</label>
            <input type ="text" type="text" name="Find" class="form-control">
            <input type ="submit" value="Find">
        </form>
    </center>
    </body>
</html>
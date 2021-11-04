<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Siswa - Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <style>
        body {
          background-image: url('https://wallpapercave.com/wp/pBT4qHM.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
        </style>
    <body>
    <center>
        <h1>Student Database by Noreen</h1>
        <a href="Insert.php"><button type="button" class="btn btn-default">Insert</button><br></a>
        <a href="view.php"><button type="button" class="btn btn-default">View</button><br></a>
        <a href="Search.php"><button type="button" class="btn btn-default">Search</button><br></a>
        <a href='UpdateData.php?id_buku=$baris[0]'><button type="button" class="btn btn-default">Update</button><br></a>
        <a href='Delete.php?id_buku=$baris[0]'><button type="button" class="btn btn-default">Delete</button><br></a>
    </center>
    </body>
</html>
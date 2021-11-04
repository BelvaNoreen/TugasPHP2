<!DOCTYPE html>
<html>
<head>
  <title>Database Siswa - View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

    <style>
        body {
          background-image: url('https://media.istockphoto.com/photos/gray-abstract-minimal-motion-backgrounds-loopable-elements-4k-picture-id1174989482?b=1&k=20&m=1174989482&s=170667a&w=0&h=ld7ukW9KTzUlJLc6c37C2xs5ESYP2wLyjxsEVCumn2s=');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style>

    <body>
        <center>
        <h1>View Data</h1>
    <?php
        include 'ConnectToDatabase.php';
        echo "<a href='Insert.php'><button>Add Data</button></a><br>";

    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "NIS           : " . $baris[1] . "<br>";
        echo "Nama Siswa    : " . $baris[2] . "<br>";
        echo "Jenis Kelamin : " . $baris[3] . "<br>";
        echo "Alamat        : " . $baris[4] . "<br>";
        echo "Jurusan       : " . $baris[5] . "<br>";
        echo "<a href='UpdateData.php?id_buku=$baris[0]'><button>Update</button></a>";
        echo "<a href='Delete.php?id_buku=$baris[0]'><button>Delete</button></a>";
        $a++;
    }
    $conn->close();
?>
</center>
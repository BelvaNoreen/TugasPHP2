<title>Database Siswa - Delete</title>
<center>
<h1>Delete Data Siswa</h1>

<style>
        body {
          background-image: url('https://wallpapercave.com/wp/ZNzSevS.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style>

<?php
    include './ConnectToDatabase.php';

    $id_siswa = $_GET['id_buku'];

    $sql = "DELETE FROM buku WHERE id_siswa='$id_siswa'";

    if($conn->query($sql) === TRUE){
        echo "Data successfully erased! <br>";
        echo "<a href='View.php'><button>Back</button></a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
</center>
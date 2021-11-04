<body>
    <center>
        <h1>Search Results</h1>
</body>

<style>
        body {
          background-image: url('http://2.bp.blogspot.com/-OwWMk1CC2ok/UM2hsDN-nSI/AAAAAAAAEjQ/Fp3dKry-lFU/s1600/latest+landscapes+hd+wallpapers.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
        </style>

<?php
    $Column=$_POST['Column'];
    $Find=$_POST['Find'];
    $link = mysqli_connect ("localhost","root","","db_siswa");
    $Hasil=mysqli_query($link,"SELECT * FROM buku WHERE $Column like '%$Find%'");
    $jumlah=mysqli_num_rows ($Hasil);
    echo "<br>";
    echo "Found: $jumlah";
    echo "<br>";
    while ($baris=mysqli_fetch_array($Hasil))
    {
        echo "NIS : " . $baris[1] . "<br>";
        echo "Nama Siswa : " . $baris[2] . "<br>";
        echo "Jenis Kelamin : " . $baris[3] . "<br>";
        echo "Alamat : " . $baris[4] . "<br>";
        echo "Jurusan : " . $baris[5] . "<br>";
    }
?>
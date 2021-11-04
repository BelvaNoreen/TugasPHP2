<?php
    session_start();
    if(isset($_POST["nis"])){
        include 'ConnectToDatabase.php';

        $nis = $_POST["nis"];
        $nama_siswa = $_POST["nama_siswa"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $id_jurusan = $_POST["id_jurusan"];

        $message    = "";

        if($nis==""){
            $message    = "NIS must be filled";
        }else if($nama_siswa==""){
            $message    = "Nama Siswa must be filled";
        }else if($jenis_kelamin==""){
            $message    = "Jenis Kelamin must be filled";
        }else if($alamat==""){
            $message    = "Alamat must be filled";
        }else if($id_jurusan==""){
            $message    = "ID Jurusan must be filled";
        }else{
            $conn->query("INSERT INTO buku VALUES (null, '".$nis."','".$nama_siswa."','".$jenis_kelamin."','".$alamat."','".$id_jurusan."')");

            $message = "Succesfully added new data!";
        }
        $_SESSION["message"] = $message;
    }

    header("location:Insert.php");
    exit();
?>
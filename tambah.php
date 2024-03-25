<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php';

if(isset($_POST["submit"]) ) {

    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<html>
    <head>
        <title>tambah data mahasiswa</title>
        <style>
             body {
background-color: #00FF00
}
        </style>
    </head>
    <body>
        <h1>Tambah Data Mahasiswa</h1>

        <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="email">EMAIL :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">GAMBAR :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
               <button type="submit" name="submit">Tambah Data!</button> 
            </li>
        </ul>
        </form>
    </body>
</html>
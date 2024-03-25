<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST["submit"]) ) {

    if( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil di ubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal di ubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<html>
    <head>
        <title>Ubah data mahasiswa</title>
        <style>
             body {
background-color: #00FF00
}
        </style>
    </head>
    <body>
        <h1>Ubah Data Mahasiswa</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp"
                value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="email">EMAIL :</label>
                <input type="text" name="email" id="email"
                value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan"
                value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">GAMBAR :</label><br>
                <img src="image/<?= $mhs['gambar']; ?>" width="50"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
               <button type="submit" name="submit">Ubah Data!</button> 
            </li>
        </ul>
        </form>
    </body>
</html>
<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");



//tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<html>
    <head>
        <title>Sepri Aridas</title>
        <style>
            body {
background-color: #00FF00
}
            .loader {
                width: 120px;
                position: absolute;
                top: 100px;
                left: 240px;
                display: none;

            }
        </style>

        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/script.js"></script>

    </head>
    <body >
            
            <a href="logout.php">Logout</a>

            <h1>Daftar Mahasiswa</h1>

            <a href="tambah.php">Tambah Data Mahasiswa</a>
            <br><br>
            <form action="" method="post">

            <input type="text" name="keyword" size="30" autofocus
            placeholder="masukkan keyword pencarian..." autocomplete="off"
            id="keyword">
           
            <img src="image/loader.gif" class="loader">

            </form>
            <br>

      
        
            <div id="container">
        <table border="10" cellpadding="10" cellspacing="2">
        <tr>
            <th>NO.</th>
            <th>NAMA</th>
            <th>NRP</th>
            <th>EMAIL</th>
            <th>JURUSAN</th>
            <th>GAMBAR</th>
            <th>AKSI</th>
        </tr>

        <?php $i = 1; ?>

        <?php foreach ($mahasiswa as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
           
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td> <img src="image/<?= $row["gambar"]; ?>" width="80"> </td>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"];?>"
                onclick="return confirm('yakin..?')">Hapus</a>
            </td>
           
            
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        </table>
        </div>

    </body>
</html>
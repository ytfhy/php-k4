<?php
require 'function.php';

if( isset($_POST["registrasi"]) ) {
    if( registrasi($_POST) > 0 ){
        echo "<script>
            alert('user baru berhasil ditambahkan');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <style>
             body {
background-color: #00FF00
}
            label {
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>

            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">
            </li>

            <li>
                <button type="submit" name="registrasi">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>
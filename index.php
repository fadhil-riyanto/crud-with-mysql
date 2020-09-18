<?php
if(isset($_GET["pesan"])){
    if ($_GET["pesan"] == "gagal"){
        echo "Login gagal! Username dan password salah";
    } elseif ($_GET["pesan"] == "logout"){
        echo "anda sudah logout";
    } elseif ($_GET["pesan"] == "belum login") {
        echo "Anda harus login dulu untuk mengakses halaman CRUD";
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>
<hr>
    <form action="cek_login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required="yes" autocomplete="off">
            <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password" required="yes" autocomplete="off">
            <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>
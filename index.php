<?php
if(isset($_GET["pesan"])){
    if ($_GET["pesan"] == "gagal"){
        echo "<script>alert('Session gagal di buat di server...ulangi!');</script>";
    } elseif ($_GET["pesan"] == "logout"){
        echo "<script>alert('Session udah di destroy');</script>";
    } elseif ($_GET["pesan"] == "belum login") {
        echo "<script>alert('Kamu belum login lah....Login dulu!');</script>";
    }
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gaya_login.css">


</head>

<body>


    <form action="cek_login.php" method="post" class="kotak">
        <h1>Login Here</h1>

        <input type="text" name="username" id="username" required="yes" autocomplete="off" placeholder="Username">
        <br>

        <input type="password" name="password" id="password" required="yes" autocomplete="off" placeholder="Password">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>
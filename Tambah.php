<?php
session_start();
if($_SESSION["status"] != "login"){
    header("Location: index.php?pesan=belum login");
}
$koneksi = mysqli_connect("localhost","root","root","phpdasar");
//load selesai

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $no_whatsapp = $_POST["no_whatsapp"];


    mysqli_query($koneksi, "INSERT INTO users(name, email, no_whatsapp) VALUES ('$name','$email','$no_whatsapp')");
    header("location: bacaDatabase.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <hr>
    <a href="bacaDatabase.php">Batal</a>
    <form action="" method="post">
        <ul>
            <li>
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" autocomplete="off" >
            </li>

            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" >
            </li>

            <li>
                <label for="no_whatsapp">No telpon</label>
                <input type="text" name="no_whatsapp" id="no_whatsapp" autocomplete="off" >
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>
</body>

</html>
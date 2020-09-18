<?php
session_start();
if($_SESSION["status"] != "login"){
    header("Location: index.php?pesan=belum login");
}
$koneksi = mysqli_connect("localhost","root","root","phpdasar");
?>
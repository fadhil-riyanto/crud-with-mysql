<?php
session_start();
require "config.php";
 $username = $_POST["username"];
 $password = $_POST["password"];

$data = mysqli_query($koneksi, "SELECT * FROM `phpdasar`.`login_system` WHERE username = '$username' AND password = '$password'");
$row = mysqli_num_rows($data);
 if ($row > 0){
     $_SESSION["username"] = $username;
     $_SESSION["status"] = "login";
     header("Location: bacaDatabase.php");
 } else {
    header("Location: index.php?pesan=gagal");
 }
 
?>
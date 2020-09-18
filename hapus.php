<?php
if(isset($_GET["id"])){
    $koneksi = mysqli_connect("localhost","root","root","phpdasar");

    $id = $_GET["id"];
    
    $kueri = "DELETE FROM `phpdasar`.`users` WHERE  `id`=$id;";
    mysqli_query($koneksi, $kueri);
    header("location: bacaDatabase.php");
}

?>
<?php
$koneksi = mysqli_connect("localhost","root","root","phpdasar");
//load selesai

if(isset($_POST["submit"])){
    global $result;
    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $no_whatsapp = $_POST["no_whatsapp"];
    $kueri = "UPDATE `phpdasar`.`users` SET `name`='$name', `email`='$email', `no_whatsapp`='$no_whatsapp' WHERE  `id`=$id;";
    // $kueri = "UPDATE users SET name = '$name' email = '$email' no_whatsapp = '$no_whatsapp' WHERE id = $id";
    mysqli_query($koneksi, $kueri);
    header("Location: bacaDatabase.php");
}
$id = $_GET["id"];
$result = mysqli_query($koneksi, "SELECT * FROM `users` WHERE id=$id");
?>
<?php while($ambil_data = mysqli_fetch_assoc($result)):?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
</head>

<body>
<h1>Ubah Data</h1>
<hr>
<a href="bacaDatabase.php">Batal</a>
    <form action="" method="post">
        
        <ul>
            <li>
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" autocomplete="off" value="<?= $ambil_data["name"]?>" required="yes">
            </li>

            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" value="<?= $ambil_data["email"]?>" required="yes">
            </li>

            <li>
                <label for="no_whatsapp">No telpon</label>
                <input type="text" name="no_whatsapp" id="no_whatsapp" autocomplete="off" value="<?= $ambil_data["no_whatsapp"]?>" required="yes">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>

        
    </form>
</body>
<?php endwhile;

?>
</html>
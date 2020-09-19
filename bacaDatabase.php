<?php
session_start();
if($_SESSION["status"] != "login"){
    header("Location: index.php?pesan=belum login");
}
//load data dan file file
require "config.php";
// ====================
$result = mysqli_query($koneksi, "SELECT * FROM `users` ORDER BY `id` DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar teman</h1>
    <hr>
    <a href="Tambah.php">Tambah data</a> | <a href="logout.php">Logout</a>
    <div id="keyword">
        <input type="text" name="keyword" placeholder="Cari data...!">
    </div>

    <div id="container">
        <table border="1">
            <tr>
                <th>
                    No
                </th>
                <th>
                    Aksi For admin
                </th>
                <th>
                    Nama
                </th>
                <th>
                    email
                </th>
                <th>
                    no whatsapp
                </th>
            </tr>
            <?php $i=1;?>
            <?php while ($ambil_result = mysqli_fetch_assoc($result)):?>


            <tr>
                <td>
                    <?= $i?>
                </td>
                <td>
                    <a href="hapus.php?id=<?= $ambil_result["id"]?>">Hapus</a> | <a
                        href="ubah.php?id=<?= $ambil_result["id"]?>">Ubah</a>
                </td>
                <td>
                    <?= $ambil_result["name"]?>
                </td>
                <td>
                    <?= $ambil_result["email"]?>
                </td>
                <td>
                    <?= $ambil_result["no_whatsapp"]?>
                </td>
            </tr>
            <?php $i++?>
            <?php endwhile;?>

        </table>
    </div>
    <script>

        var keyword = documentGetElementById('keyword');
        var container = documentGetElementById('container');

        keyword.addEventListener('keyup', function () {


            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log('Halo');
                }

            }

            xhr.open('GET', 'tesk.txt', true);
            xhr.send();
        });

    </script>
</body>

</html>
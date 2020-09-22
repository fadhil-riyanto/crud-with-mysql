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
    <link rel="stylesheet" type="text/css" href="gaya_crud.css">
    <link rel="stylesheet" href="bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>




    <script src="jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <br>

    <a href="Tambah.php" class='tombol'>Tambah data</a> | <a href="logout.php" class='tombol'>Logout</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Info developers
    </button>
    <br><br><br>
    <!-- <div id="keyword">
        <input type="text" name="keyword" placeholder="Cari data...!">
    </div> -->


    <table class="table1">
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



    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Info developers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <P>Nama : Fadhil Riyanto
                    <p>Lagu : Banyak</p>

                    <p>Hobi : Coding</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


</body>
<footer>
    <br><br><br>
    <center>script &copy Internsial Node</center>
</footer>

</html>
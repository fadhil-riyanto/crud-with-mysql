<?php
if(isset($_GET["pesan"])){
    if ($_GET["pesan"] == "gagal"){
        echo "
        
        <div id='myModal' class='modal fade' role='dialog'>
            <div class='modal-dialog'>
        
                <!-- Modal content-->
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                        <h4 class='modal-title'>Modal Header</h4>
                    </div>
                    <div class='modal-body'>
                        <p>Some text in the modal.</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                    </div>
                </div>
        
            </div>
        </div>
        
        ";
    } elseif ($_GET["pesan"] == "logout"){
        echo "anda sudah logout";
    } elseif ($_GET["pesan"] == "belum login") {
        echo "Kamu belum Login";
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
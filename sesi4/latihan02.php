<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Data</title>
</head>
<body>

<?php
    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        if($usr==""){
            echo "<div><h3 style='color:red;padding:5px;'>User Name/password salah</h3></div>";
        }
    }
    if(isset($_POST["txPASSKEY"])){
        $pwd = $_POST["PASSKEY"];
        if($pwd==""){
            echo "<div><h3 style='color:red;padding:5px;'>User Name/password salah</h3></div>";
        }
    }

?>


    <form action="latihan02.php" method="POST">
        <div>
           
            User name
            <input type="text" id="txUSER" name="txUSER" >
        </div>

        <div>
            Password
            <input type="Password" id="txPASSKEY" name="txPASSKEY" >
        </div>

        <div>
            <button type="submit"> Login </button>
            <a href="daftar.php"> Daftar </a>
        </div>
</body>
</html>
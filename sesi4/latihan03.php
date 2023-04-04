<?php
    if(isset($_POST["uploadfile"])){
        print_r($_FILES);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>

    <form action="latihan03.php" method="POST" enctype="multipart/form-data">

        <div>
            Upload Gambar
            <input type="file" name="f1GAMBAR">
        </div>

        <div>
            <input type="hilden" name="uploadfile" value="ok">
            <button type="submit">Upload Gambar</button>
        </div>
    
    </form>
    
</body>
</html>
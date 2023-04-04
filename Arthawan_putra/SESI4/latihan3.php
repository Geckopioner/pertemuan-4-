<?php 
    $path = "uploadgambar/";
    if(isset($_POST["uploadfile"])){
        if($_FILES["flGambar"]["error"]==0){
            $flname = $path . basename ($_FILES["flGambar"]["name"]);
            move_uploaded_file ($_FILES["flGambar"]["tmp_name"],$flname);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <?php
    if(isset($_POST["Uploadfile"])){
        echo "<img src='".$flGambar."'>";
    }
    
<form action= "latihan3.php" method="POST" enctype="multipart/form-data" >
    <div>
    Upload gambar
    <input type ="file" nama="flGambar" > 
</div>
<div>
    <input type ="hidden" name="uploadfile" value="OKEEE">
<button type="submit"> Upload gambar </button>
</div>
</body>
</html>
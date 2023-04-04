<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_GET["txuser"])){
        $usr = $_GET ["txuser"];
        if($usr==""){
            echo "<div><h3 style='color:red;padding: 5px;'> User Name belum diisi woy </h3></div>";
        }  
    }
?>
    
    <form action="latihan1.php" method= "GET" >
    <div>
       <hr>
    user name
        <input type="text" id="txuser" name="txuser">
        </hr>
    </div>
        <br>
    <div>
        password
        <input type="password" id="txpasskey" name="txpasskey">
    </div>

    <div>
        <button type="submit"> Login </button>
        <a href="daftar.php"> Daftar </a>
    </div>

    </form>
</body>
</html>
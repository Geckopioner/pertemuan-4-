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
  if (isset($_POST["txpasskey"])){
    $pwd = $_POST ["txpasskey"];
    if($pwd==""){
        echo "<div><h3 style='color:red;padding: 5px;'> data lo salah anjing </h3></div>";
        }  
    }

if (isset($_POST["txuser"])){
    $usr = $_POST ["txuser"];
    if($usr==""){
        echo "<div><h3 style='color:red;padding: 5px;'> data lo salah anjing </h3></div>";
        }  
    }
?>
    <form action="latihan2.php" method= "POST" >
    <div>
       <hr>
    user name
        <input type="text" id="txuser" name="txuser" required>
        </hr>
    </div>
        <br>
    <div>
        password
        <input type="password" id="txpasskey" name="txpasskey " required>
    </div>

    <div>
        <button type="submit"> Login </button>
        <a href="daftar.php"> Daftar </a>
    </div>

    </form>
</body>
</html>
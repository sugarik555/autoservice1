<?php
require_once("./db/db.php");
$services_id=$_GET['id'];
$services = mysqli_query($link,"SELECT * FROM `services` WHERE `id` = '$services_id'");
$services = mysqli_fetch_assoc($services);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение товара</title>
</head>
<style>
    H2 {
    color:#fff;
    }
    body{
    background-image: url("фон вкладок.jpg");
    background-size: cover;
    }
    .forma{
    background: rgba(0, 0, 0, 0.7);
    height: 370px;
    width: 270px;
    justify-items: center;
    text-align: center;
    border-radius: 15px;
    box-shadow: 10px 10px 10px 2px rgba(7, 12, 16, 0.2) inset;
    border: 4px ridge black;
    margin-top:4%;
    margin-left:5%;
    }
    input{
    border-radius: 15px;
    width: 70%;
    height: 35px;
    border: 4px ridge black;
    }
    select{
    border-radius: 5px;
    width: 75%;
    height: 40px;
    border: 4px ridge black;
    }
</style>
<div class="forma">
<body>
<h2 style="padding-top:7px;">Изменение данных об услуге</h2>
<form  action="./vendor/update_services.php" method="post">
    <input type="hidden" name="id" value="<?=$services['id']?>">
    <input type="text" name="name" value="<?= $services['name'] ?>">
    <br>
    <br>
    <input type="text" name="price" value="<?=$services['price']?>">
    <br>
    <br>
    <input type="text" name="description" value="<?=$services['description']?>">
    <br>
    <br>
    <input style="width: 50%;" type="submit" value="Изменить">
    <br>
</form>
</div>
</body>
</html>
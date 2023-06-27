<?php
require_once("./db/db.php");
$employees_id=$_GET['id'];
$employees = mysqli_query($link,"SELECT * FROM `sotrydniki` WHERE `id` = '$employees_id'");
$employees = mysqli_fetch_assoc($employees);
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
    height: 650px;
    width: 270px;
    justify-items: center;
    text-align: center;
    border-radius: 15px;
    box-shadow: 10px 10px 10px 2px rgba(7, 12, 16, 0.2) inset;
    border: 4px ridge black;
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
<h2 style="padding-top:7px;">Изменение данных о сотруднике</h2>
<form  action="./vendor/update_employees.php" method="post">
    <input type="hidden" name="ID" value="<?=$employees['ID']?>">
    <input type="text" name="login" value="<?= $employees['login'] ?>">
    <br>
    <br>
    <input type="text" name="password" value="<?= $employees['password'] ?>">
    <br>
    <br>
    <input type="text" name="fio" value="<?=$employees['fio']?>">
    <br>
    <br>
    <input type="date" name="birth" value="<?=$employees['birth']?>">
    <br>
    <br>
    <input type="text" name="address" value="<?=$employees['address']?>">
    <br>
    <br>
    <input type="text" name="phone" value="<?=$employees['phone']?>">
    <br>
    <br>
    <input type="text" name="role" value="<?=$employees['role']?>">
    <br>
    <br>
    <input type="text" name="time" value="<?=$employees['time']?>">
    <br>
    <br>
    <input style="width: 50%;" type="submit" value="Изменить">
    <br>
</form>
</div>
</body>
</html>
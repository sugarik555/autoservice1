<?php
require_once("./db/db.php");
$products_id=$_GET['id'];
$products = mysqli_query($link,"SELECT * FROM `products` WHERE `id` = '$products_id'");
$products = mysqli_fetch_assoc($products);
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
    height: 470px;
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
<h2 style="padding-top:7px;">Изменение данных о товаре</h2>
<form  action="./vendor/update_products.php" method="post">
    <input type="hidden" name="id" value="<?=$products['id']?>">
    <input type="text" name="name" value="<?= $products['name'] ?>">
    <br>
    <br>
    <input type="text" name="price" value="<?=$products['price']?>">
    <br>
    <br>
    <input type="text" name="amount" value="<?=$products['amount']?>">
    <br>
    <br>
    <input type="text" name="proizvoditel" value="<?=$products['proizvoditel']?>">
    <br>
    <br>
    <input type="text" name="description" value="<?=$products['description']?>">
    <br>
    <br>
    <input style="width: 50%;" type="submit" value="Изменить">
    <br>
</form>
</div>
</body>
</html>
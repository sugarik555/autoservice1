<?php
require_once("../db/db.php");// Подключение к БД
// Записивыем ключи глобального массива POST в переменные
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$proizvoditel = $_POST['proizvoditel'];
$description = $_POST['description'];
// что принимает функция mysqli_query - $link, это подключение к БД, а UPDATE... производит изменения в уже существующей записи
mysqli_query($link, "UPDATE `products` SET `name` = '$name', `price` = '$price', `amount` = '$amount', `proizvoditel` = '$proizvoditel', `description` = '$description' WHERE `products`.`id` = '$id'");
// и перенаправляем на страницу
header("Location: ../products.php");
?>
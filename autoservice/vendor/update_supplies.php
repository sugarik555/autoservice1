<?php
require_once("../db/db.php");// Подключение к БД
// Записивыем ключи глобального массива POST в переменные
$id = $_POST['id'];
$product = $_POST['product'];
$agent = $_POST['agent'];
$amount = $_POST['amount'];
$price = $_POST['price'];
$date = $_POST['date'];
// что принимает функция mysqli_query - $link, это подключение к БД, а UPDATE... производит изменения в уже существующей записи
mysqli_query($link, "UPDATE `supplies` SET `product` = '$product', `agent` = '$agent', `amount` = '$amount', `price` = '$price', `date` = '$date' WHERE `supplies`.`id` = '$id'");
// и перенаправляем на страницу
header("Location: ../supplies.php");
?>
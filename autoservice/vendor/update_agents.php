<?php
require_once("../db/db.php");// Подключение к БД
// Записивыем ключи глобального массива POST в переменные
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
// что принимает функция mysqli_query - $link, это подключение к БД, а UPDATE... производит изменения в уже существующей записи
mysqli_query($link, "UPDATE `agents` SET `name` = '$name', `address` = '$address', `phone` = '$phone' WHERE `agents`.`id` = '$id'");
// и перенаправляем на страницу
header("Location: ../agents.php");
?>
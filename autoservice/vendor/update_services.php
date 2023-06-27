<?php
require_once("../db/db.php");// Подключение к БД
// Записивыем ключи глобального массива POST в переменные
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
// что принимает функция mysqli_query - $link, это подключение к БД, а UPDATE... производит изменения в уже существующей записи
mysqli_query($link, "UPDATE `services` SET `name` = '$name', `price` = '$price', `description` = '$description' WHERE `services`.`id` = '$id'");
// и перенаправляем на страницу
header("Location: ../services.php");
?>
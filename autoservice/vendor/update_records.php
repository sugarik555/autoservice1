<?php
require_once("../db/db.php");// Подключение к БД
// Записивыем ключи глобального массива POST в переменные
$id = $_POST['id'];
$fio = $_POST['fio'];
$service = $_POST['service'];
$master = $_POST['master'];
$time = $_POST['time'];
// что принимает функция mysqli_query - $link, это подключение к БД, а UPDATE... производит изменения в уже существующей записи
mysqli_query($link, "UPDATE `records` SET `fio` = '$fio', `service` = '$service', `master` = '$master', `time` = '$time' WHERE `records`.`id` = '$id'");
// и перенаправляем на страницу
header("Location: ../records.php");
?>
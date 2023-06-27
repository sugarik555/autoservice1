<?php
require_once("../db/db.php");// Подключение к БД
// Записивыем ключи глобального массива POST в переменные
$ID = $_POST['ID'];
$fio = $_POST['fio'];
$login = $_POST['login'];
$password = $_POST['password'];
$role = $_POST['role'];
$phone = $_POST['phone'];
$birth = $_POST['birth'];
$address = $_POST['address'];
$time = $_POST['time'];
// что принимает функция mysqli_query - $link, это подключение к БД, а UPDATE... производит изменения в уже существующей записи
mysqli_query($link, "UPDATE `sotrydniki` SET `fio` = '$fio', `login` = '$login', `password` = '$password', `role` = '$role', `phone` = '$phone', `birth` = '$birth', `address` = '$address', `time` = '$time' WHERE `sotrydniki`.`ID` = '$ID'");
// и перенаправляем на страницу
header("Location: ../employees.php");
?>
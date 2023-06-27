<?php
require_once("../db/db.php");// Подключение к БД
// Выводим все содержимое глобального массива POST, который пришел от формы авторизации 
var_dump($_POST);
// Записивыем ключи глобального массива POST в переменные
$fio = $_POST['fio'];
$login = $_POST['login'];
$password = $_POST['password'];
$role = $_POST['role'];
$phone = $_POST['phone'];
$birth = $_POST['birth'];
$address = $_POST['address'];
$time = $_POST['time'];
// что принимает функция mysqli_query - $link, это подключение к БД, а INSERT INTО... добавляет строки в таблицу
$create_employee = mysqli_query($link, "INSERT INTO `sotrydniki`(`fio`, `login`, `password`, `role`, `phone`, `birth`, `address`, `time`) VALUES ('$fio','$login','$password','$role', '$phone','$birth','$address','$time')");
// перенаправляем на страницу 
if($create_employee) {
header("Location: ../menu.php");
}
?>
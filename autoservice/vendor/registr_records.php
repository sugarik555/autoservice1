<?php
require_once("../db/db.php");// Подключение к БД
// Выводим все содержимое глобального массива POST, который пришел от формы авторизации 
var_dump($_POST);
// Записивыем ключи глобального массива POST в переменные
$fio = $_POST['fio'];
$service = $_POST['service'];
$master = $_POST['master'];
$time = $_POST['time'];
// что принимает функция mysqli_query - $link, это подключение к БД, а INSERT INTО... добавляет строки в таблицу
$create_records = mysqli_query($link, "INSERT INTO `records`(`fio`, `service`, `master`, `time`) VALUES ('$fio','$service','$master','$time')");
// перенаправляем на страницу 
if($create_records) {
header("Location: ../records.php");
}
?>
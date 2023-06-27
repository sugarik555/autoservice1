<?php
require_once("../db/db.php");// Подключение к БД
// Выводим все содержимое глобального массива POST, который пришел от формы авторизации 
var_dump($_POST);
// Записивыем ключи глобального массива POST в переменные
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
// что принимает функция mysqli_query - $link, это подключение к БД, а INSERT INTО... добавляет строки в таблицу
$create_agent = mysqli_query($link, "INSERT INTO `agents`(`name`, `address`, `phone`) VALUES ('$name','$address','$phone')");
// перенаправляем на страницу 
if($create_agent) {
header("Location: ../agents.php");
}
?>
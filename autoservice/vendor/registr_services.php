<?php
require_once("../db/db.php");// Подключение к БД
// Выводим все содержимое глобального массива POST, который пришел от формы авторизации 
var_dump($_POST);
// Записивыем ключи глобального массива POST в переменные
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
// что принимает функция mysqli_query - $link, это подключение к БД, а INSERT INTО... добавляет строки в таблицу
$create_service = mysqli_query($link, "INSERT INTO `services`(`name`, `price`, `description`) VALUES ('$name','$price', '$description')");
// перенаправляем на страницу 
if($create_service) {
header("Location: ../services.php");
}
?>
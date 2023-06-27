<?php
require_once("../db/db.php");// Подключение к БД
// Выводим все содержимое глобального массива POST, который пришел от формы авторизации 
var_dump($_POST);
// Записивыем ключи глобального массива POST в переменные
$product = $_POST['product'];
$agent = $_POST['agent'];
$amount = $_POST['amount'];
$price = $_POST['price'];
$date = $_POST['date'];
// что принимает функция mysqli_query - $link, это подключение к БД, а INSERT INTО... добавляет строки в таблицу
$create_supply = mysqli_query($link, "INSERT INTO `supplies`(`product`, `agent`, `amount`, `price`, `date`) VALUES ('$product','$agent','$amount','$price', '$date')");
// перенаправляем на страницу 
if($create_supply) {
header("Location: ../supplies.php");
}
?>
<?php
// Стартуем сессию, чтобы мы могли передавать ошибки в глобальнные массивы и выводить их.
session_start();
// Подключаем БД
require_once("../db/db.php");
// Записивыем ключи глобального массива POST в переменные
$login = $_POST['login'];
$password = $_POST['password'];
// что принимает функция mysqli_query - $link, это подключение к БД, а SELECT... уже является выборкой из БД
$select_user = mysqli_query($link, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
// превращаем ответ БД в ассоциативный массив 
$select_user = mysqli_fetch_assoc($select_user);
// проверка на существование пользователя 
// структура сравнения, если ответ от БД не пустой, то мы сравниваем хеши паролей, который пришел из формы и из БД, 
// если хеши совпадают, перенаправляем на страницу со всеми пользователями 
// если же ответ пустой(NULL), мы записываем в глобальный массив SESSION ошибку 
// и перенаправляем на страницу авторизации
if(!empty($select_user)) {
    if($password=$select_user['password']) {
        header("Location: ../menu.php");
    }
} else {
    $_SESSION['ErrMes'] = "<span style='color:#FFFFFF'>Такого пользователя не существует!</span>";
    header("Location: ../index.php");
}

?>

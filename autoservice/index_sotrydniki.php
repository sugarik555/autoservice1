<?php
// стартуем сессии, для того чтобы мы могли пользоваться глобальным массивом SESSION, для передачи ошибок
session_start();
require_once("./db/db.php"); //подключение БД
?>
<link rel="stylesheet" href="main.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<style>
    body {
        background-image: url("фон авторизации.jpg");
        background-size: cover;
        background-position:bottom right; 
    } 
    .form{
        background-color:#f2f0f0;
        height: 330px;
        width: 300px;
        justify-items: center;
        text-align: center;
        border-radius: 15px;
        box-shadow: 1px 4px 30px 1px #919090;
        border: 1mm solid #000;
        margin: 80px 0 0 80px;
    }
    input{
        border-radius: 50px;
        width: 80%;
        height: 35px;
        justify-items: center;
        
        box-shadow: 1px 4px 10px 1px #b8b4b4;
    }
    .button{
        width:175px;
        padding-left: 60px;
        padding-top:5px
    }
</style>
<body>
    <center>
    <img src="логотип.png" width="160">
    </center>
    <div class="form">
    <!-- форма авторизации -->
        <h1 style="color:#000; padding-top:5px">Авторизация для сотрудников</h1>
        <br>
        <form action="./vendor/log.php" method="post"> <!-- Указывает обработчик, к которому обращаются данные формы при их отправке на сервер -->
            <input type="text" name="login" placeholder=" Логин" required>
            <br>
            <br>
            <input type="password" name="password" placeholder=" Пароль" required> 
            <br>
            <br>
            <div class="button">
                <input type="submit" value="Войти">
            </div>
        </form>
    </div>
<br>
    <?php
    // если не сделать данной проверки, то будет выведена ошибка, что данная переменная не найдена
	if (($_SESSION['ErrMes'] ?? '') === ''); else {
	    print_r($_SESSION['ErrMes']);
        // закрываем сессию, чтобы сообщение об ошибке убиралось после перезагрузки страницы
		session_destroy();
	}
    ?>
</body>
</html>
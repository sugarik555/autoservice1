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
    <title>Агенты</title>
</head>
<style>
    html, body {margin: 0; height: 100%; overflow: hidden}
    body {
        background-image: url("фон вкладок.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        
    } 
    .form{
        background-color:#f2f0f0;
        height: 360px;
        width: 300px;
        justify-items: center;
        text-align: center;
        border-radius: 15px;
        border: 1mm solid #000;
        margin: 40px 0 0 60px;
        display: inline-block;
    }
    input{
        border-radius: 50px;
        width: 80%;
        height: 35px;
        justify-items: center;
    }
    .button{
        width:150px;
        padding-left: 70px;
        padding-top:5px
    }
    .button2{
        width:150px;
        position: relative;
        left: 90%;
        top: 2%;
    }
    th,td{
        padding: 10px;
        border: 4px ridge black;
        
    }
    th{
        background: rgba(255, 255, 255, 0.7);
        color:#000;
    }
    td{
        background: rgba(255, 255, 255, 0.7);
        color:#000;
        white-space: normal;
    }
    table{
        text-align: center;
        position: sticky;
        top: 0;
        width: 100%;
    }
    .tableContainer {
    height:460px;
    width: 730px;
    Overflow-y:scroll;
    position: relative;
    top: -305px;
    left:400px;
    }
    .tableContainer.scroll{
    Overflow-y:scroll;
    }
</style>
<body>
    <div class="button2">
        <form action="./menu.php" method="get">
        <input type="submit" value="На главную">
    </form>
</div>    
    <div>
    <div class="form">
    <!-- форма авторизации -->
        <h1 style="color:#000; padding-top:5px">Добавление поставщика</h1>
        <br>
        <form action="./vendor/registr_agents.php" method="post"> <!-- Указывает обработчик, к которому обращаются данные формы при их отправке на сервер -->
            <input type="text" name="name" placeholder=" Название" required>
            <br>
            <br>
            <input type="text" name="address" placeholder=" Адрес" required> 
            <br>
            <br>
            <input type="text" name="phone" placeholder=" Номер телефона" required> 
            <br>
            <br>
            <div class="button">
                <input type="submit" value="Добавить">
            </div>
             <!-- таблица -->
             <div class="tableContainer">
             <table>
                <tr>
                    <th>Название</th>
                    <th>Адрес</th>
                    <th>Номер телефона</th>
                </tr>
                <!-- вывод данных из БД в таблицу -->
                <?php
                    $agents = mysqli_query($link, "SELECT * FROM `agents` ORDER BY `id` DESC");
                    $agents = mysqli_fetch_all($agents);
                    foreach ($agents as $agent) {
                ?>
                <tr>
                    <td><?= $agent[1] ?></td>
                    <td><?= $agent[2] ?></td>
                    <td><?= $agent[3] ?></td>
                    <td><a style="color:#000;" href="update_agents.php?id=<?=$agent[0] ?>">Изменить</a></td>
                    <td><a style="color:#000;" href="vendor/delete_agents.php?id=<?=$agent[0] ?>">Удалить</a></td>
                </tr>
            <?php
                }
                
            ?>
            </table>
            </div>
        </form>
    </div>
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
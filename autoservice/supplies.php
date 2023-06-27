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
    <title>Поставки</title>
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
        height: 430px;
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
    select{
        border-radius: 50px;
        width: 80%;
        height: 35px;
        justify-items: center;
        border: 0.4mm solid #000;
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
    top: -410px;
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
        <h1 style="color:#000; padding-top:5px">Заказ поставки</h1>
        <br>
        <form action="./vendor/registr_supplies.php" method="post"> <!-- Указывает обработчик, к которому обращаются данные формы при их отправке на сервер -->
            <select id="selectvalue" class="menu" name="product" placeholder="Товар">
            <?php
                $products = mysqli_query($link, "SELECT * FROM `products` ORDER BY `id` DESC");
                $products = mysqli_fetch_all($products);
                foreach ($products as $product) {
            ?>
            <option><?= $product[1] ?></option>
            <?php
                }
                
            ?>
            </select>
            <br>
            <br>
            <input type="text" name="amount" placeholder=" Количество" required> 
            <br>
            <br>
            <select id="selectvalue" class="menu" name="agent" placeholder="Агент">
            <?php
                $agents = mysqli_query($link, "SELECT * FROM `agents` ORDER BY `id` DESC");
                $agents = mysqli_fetch_all($agents);
                foreach ($agents as $agent) {
            ?>
            <option><?= $agent[1] ?></option>
            <?php
                }
                
            ?>
            </select>
            <br>
            <br>
            <input type="text" name="price" placeholder=" Цена" required> 
            <br>
            <br>
            <input type="date" name="date" placeholder=" Дата" required> 
            <br>
            <br>
            <div class="button">
                <input type="submit" value="Заказать">
            </div>
             <!-- таблица -->
             <div class="tableContainer">
             <table>
                <tr>
                    <th>Товар</th>
                    <th>Количество</th>
                    <th>Поставщик</th>
                    <th>Цена</th>
                    <th>Дата</th>
                </tr>
                <!-- вывод данных из БД в таблицу -->
                <?php
                    $supplies = mysqli_query($link, "SELECT * FROM `supplies` ORDER BY `id` DESC");
                    $supplies = mysqli_fetch_all($supplies);
                    foreach ($supplies as $supply) {
                ?>
                <tr>
                    <td><?= $supply[1] ?></td>
                    <td><?= $supply[2] ?></td>
                    <td><?= $supply[3] ?></td>
                    <td><?= $supply[4] ?></td>
                    <td><?= $supply[5] ?></td>
                    <td><a style="color:#000;" href="update_supplies.php?id=<?=$supply[0] ?>">Изменить</a></td>
                    <td><a style="color:#000;" href="vendor/delete_supplies.php?id=<?=$supply[0] ?>">Удалить</a></td>
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
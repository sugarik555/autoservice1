<?php 
// Подключаем БД
require_once("./db/db.php");
?>
<link rel="stylesheet" href="main.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
</head>
<style>
    body{
        width:100%;
        height:100%;
        overflow-x:hidden;
        background-image: url("главнаястр.jpg");
        background-size: cover;
    }
    #navbar {
        padding-left:24%;
    }

    #navbar a {
        background-color:black;
        opacity: 0.7;
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 15px;
        text-decoration: none;
        border: 1px double #fff;
    }

    #navbar a:hover {
        background-color: #ddd;
        color: black;
        
    }
    .str_1{
        width:100%;
        height:100%;
    }
    .adaptivny-slayder {
    position: relative;
    max-width: 550px;
    margin: 50px auto;
    box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);
    }

    .adaptivny-slayder input[name="kadoves"] {
    display: none;
    }
    .kadoves {
    position: absolute;
    left: 0;
    bottom: -40px;
    text-align: center;
    width: 100%;
    }

    .kadoves label {
    width: 8px;
    height: 8px;
    cursor: pointer;
    margin: 0 3px;
    box-shadow: 0 0 2px 0 rgba(0, 0, 0, .8);
    border-radius: 50%;
    border: 5px solid #2f363c;
    background-color: #738290;
    }

    .adaptivny-slayder-lasekun {
    overflow: hidden;
    
    }

    .abusteku-deagulus {
    display: flex;
    width: 100%;
    transition: all 0.5s;
    }

    .abusteku-deagulus img {
    width: 100%;
    flex-shrink:0;
    }

    #slaid1:checked~adaptivny-slayder-lasekun abusteku-deagulus {
    transform: translate(0);
    }

    #slaid2:checked~.adaptivny-slayder-lasekun .abusteku-deagulus {
    transform: translateX(-100%);
    }

    #slaid3:checked~.adaptivny-slayder-lasekun .abusteku-deagulus {
    transform: translateX(-200%);
    }
    #slaid4:checked~.adaptivny-slayder-lasekun .abusteku-deagulus {
    transform: translateX(-300%);
    }
    th,td{
        padding: 10px;
        border: 4px ridge white;
    }
    th{
        background: rgba(0, 0, 0, 0.7);
        color:#fff;
    }
    td{
        background: rgba(0, 0, 0, 0.7);
        color:#fff;
    }
    table{
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        padding-top: 2%;
    }
    .forma{
    background: rgba(0, 0, 0, 0.7);
    height: 320px;
    width: 270px;
    justify-items: center;
    text-align: center;
    border-radius: 15px;
    box-shadow: 10px 10px 10px 2px rgba(7, 12, 16, 0.2) inset;
    border: 4px ridge white;
    margin-top:4%;
    margin-left:9%;
    display: inline-block;
    }
    input{
    border-radius: 15px;
    width: 70%;
    height: 35px;
    border: 4px ridge black;
    }
    select{
    border-radius: 15px;
    width: 70%;
    height: 35px;
    border: 4px ridge black;
    }
    
    
</style>

<body>
    <div id="navbar">
    <a href="products.php">Товары</a>
    <a href="services.php">Услуги</a>
    <a href="records.php">Записи</a>
    <a href="agents.php">Поставщики</a>
    <a href="supplies.php">Поставки</a>
    <a href="employees.php">Сотрудники</a>
    <a href="registr.php">Регистрация</a>
    <a style="margin-left:16%;" href="index.php">Выйти</a>
    </div>
    <!-- 1 вкладка -->
    <div id="главная" class="str_1">
        <img src="логотип.png" width="160"  style="position: relative; left: 7%; bottom: 8%;" />
        <p style="color:#fff;text-align: center;padding-top:5%;font-size: 3em;margin: 0;text-shadow:-3px 2px 0  #000;">Опыт. Ответственность. Высокая производительность.</p>
        <p style="color:#fff;text-align: center;font-size: 1em;margin: 0;text-shadow:-2px 1px 0  #000;">Мы оказываем широкий спектр услуг по ремонту и обслуживанию автомобилей</p>
    </div>
    
        </div>
    </div>
</body>
</html>
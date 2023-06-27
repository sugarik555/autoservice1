<?php
//соединение с MySQL
$link = mysqli_connect("localhost", "veronika", "suga01", "autoservice");

if(!$link){
    echo "error connect"; // вывод ошибки
}
?>
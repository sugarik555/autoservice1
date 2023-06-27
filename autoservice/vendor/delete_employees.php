<?php
require_once("../db/db.php");
$id = $_GET['id'];
mysqli_query($link, "DELETE FROM sotrydniki WHERE `sotrydniki`.`id` = '$id'");
header("Location: ../employees.php");
?>
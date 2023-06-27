<?php
require_once("../db/db.php");
$id = $_GET['id'];
mysqli_query($link, "DELETE FROM records WHERE `records`.`id` = '$id'");
header("Location: ../records.php");
?>
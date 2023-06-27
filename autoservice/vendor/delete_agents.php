<?php
require_once("../db/db.php");
$id = $_GET['id'];
mysqli_query($link, "DELETE FROM agents WHERE `agents`.`id` = '$id'");
header("Location: ../agents.php");
?>
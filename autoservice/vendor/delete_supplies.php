<?php
require_once("../db/db.php");
$id = $_GET['id'];
mysqli_query($link, "DELETE FROM supplies WHERE `supplies`.`id` = '$id'");
header("Location: ../supplies.php");
?>
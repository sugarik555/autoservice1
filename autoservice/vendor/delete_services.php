<?php
require_once("../db/db.php");
$id = $_GET['id'];
mysqli_query($link, "DELETE FROM services WHERE `services`.`id` = '$id'");
header("Location: ../services.php");
?>
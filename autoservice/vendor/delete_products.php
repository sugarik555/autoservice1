<?php
require_once("../db/db.php");
$id = $_GET['id'];
mysqli_query($link, "DELETE FROM products WHERE `products`.`id` = '$id'");
header("Location: ../products.php");
?>
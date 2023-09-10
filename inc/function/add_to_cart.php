<?php
session_start();
include 'coon.php';
$id_user =   $_SESSION['user_id'] ;
$id_pro = $_GET['id_pro'];
$sql_pro = "INSERT INTO `cart`(id_pro, user_id, quantity) VALUES ('$id_pro','$id_user','1')";
$conn->query($sql_pro);
header('location:../../cart.php')
?>
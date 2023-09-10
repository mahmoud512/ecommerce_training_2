<?php
include('../coon.php');
$id_product = $_GET['id'];
$sql ="DELETE FROM `products` WHERE id = $id_product";
$con->query($sql);
header('location:../../../products.php')
?>
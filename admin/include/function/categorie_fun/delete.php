<?php
include('../coon.php');
$id_categorie = $_GET['id'];
$sql ="DELETE FROM `categories` WHERE id = $id_categorie";
$con->query($sql);
header('location:../../../categorie.php')
?>
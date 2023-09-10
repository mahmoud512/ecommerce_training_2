<?php
include('../coon.php');
$id_prands = $_GET['id'];
$sql ="DELETE FROM `prands` WHERE id = $id_prands";
$con->query($sql);
header('location:../../../prand.php')
?>
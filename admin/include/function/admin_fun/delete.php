<?php
include('../coon.php');
$id_admin = $_GET['id'];
$sql ="DELETE FROM `admin` WHERE id = $id_admin";
$con->query($sql);
header('location:../../../admin.php')
?>
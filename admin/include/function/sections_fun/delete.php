<?php
include('../coon.php');
$id_sections = $_GET['id'];
$sql ="DELETE FROM `pr` WHERE id = $id_sections";
$con->query($sql);
header('location:../../../sections.php')
?>
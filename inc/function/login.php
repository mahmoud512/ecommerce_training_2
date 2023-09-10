<?php
session_start();
include 'coon.php';
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$sql = "SELECT * FROM user WHERE pass = '$pass' and email = '$email'";
$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);
$row = $result->fetch_assoc();
if ($num_rows > 0) {
  $_SESSION['login'] = 0;
  $_SESSION['user_id'] = $row['id'];
  header('location:../../index.php');
}else{
  $_SESSION['error'] = 'the email or password id not found';
  header('location:../../login.php');
}
?>
<?php
session_start();
include('../coon.php');
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $error= [];
    $repeatpass = $_POST['repeatpass'];
    if ($repeatpass === $pass) {
      $pass_md5 = md5($pass);
      $sql ="INSERT INTO `admin`(name, email, pass,pr) 
      VALUES ('$fullname','$email','$pass_md5', '3')";
      $con->query($sql);
      header('location:../../../login.php');
    }else{
      $error[] ='<div class="alert alert-danger">الباسورد غير مطابق</div>';
      $_SESSION['error'] = $error;
      header('location:../../../register.php');
    }
?>
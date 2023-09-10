<?php
session_start();
include('../coon.php');
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_md5 = md5($pass);
    $error_fild= [] ;
    function errors($errors){
      if ($errors == "") {
        $error_fild[]= 'the '. $errors . 'is required';
      }
    }
    errors($email);
    errors($pass);
    $error = [];
    $sql ="SELECT * FROM `admin` WHERE email ='$email' and pass ='$pass_md5'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    if ($row > 0) {
      if ($row['active'] == 1) {
        header('location:../../../index.php');
        $_SESSION['login'] = "login";
        $_SESSION['id_admin'] = $row['id'];
        $_SESSION['pr_admin'] = $row['pr'];
        $_SESSION['name_admin'] = $row['name'];
      }else{
        $error[] = '<div class="alert alert-danger">الحساب غير مفعل</div>';
        header('location:../../../login.php');
        $_SESSION['error'] = $error;
      }
    }else{
      $error[] = '<div class="alert alert-danger">الباسورد او الاميل غير صحيح</div>';
      $_SESSION['error'] = $error;
      header('location:../../../login.php');
    }
?>
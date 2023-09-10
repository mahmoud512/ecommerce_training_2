<?php
ob_start();
include('include/layout/sidebar.php');
include('include/layout/Navbar.php');
  if (empty($_GET['do'])) {
    include('include/layout/prands/index.php');
  }else{
    if($_GET['do']== "add"){
      include('include/layout/prands/add_prands.php');
    }
    if($_GET['do']== "edit"){
      include('include/layout/prands/edit_prands.php');
    }
  }
  include('include/layout/Footer.php');
  ob_end_flush();
?>
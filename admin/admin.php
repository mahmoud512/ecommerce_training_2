<?php
ob_start();
include('include/layout/sidebar.php');
include('include/layout/Navbar.php');
  if (empty($_GET['do'])) {
    include('include/layout/admin/index.php');
  }else{
    if($_GET['do']== "add"){
      include('include/layout/admin/add_admin.php');
    }
    if($_GET['do']== "edit"){
      include('include/layout/admin/edit_admin.php');
    }
  }
  include('include/layout/Footer.php');
  ob_end_flush();
?>
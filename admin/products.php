<?php
ob_start();
include('include/layout/sidebar.php');
include('include/layout/Navbar.php');
  if (empty($_GET['do'])) {
    include('include/layout/product/index.php');
  }else{
    if($_GET['do']== "add"){
      include('include/layout/product/add_product.php');
    }
    if($_GET['do']== "edit"){
      include('include/layout/product/edit_product.php');
    }
  }
  include('include/layout/Footer.php');
  ob_end_flush();
?>
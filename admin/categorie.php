<?php
ob_start();
include('include/layout/sidebar.php');
include('include/layout/Navbar.php');
  if (empty($_GET['do'])) {
    include('include/layout/categorie/index.php');
  }else{
    if($_GET['do']== "add"){
      include('include/layout/categorie/add_categorie.php');
    }
    if($_GET['do']== "edit"){
      include('include/layout/categorie/edit_categorie.php');
    }
  }
  include('include/layout/Footer.php');
  ob_end_flush();
?>
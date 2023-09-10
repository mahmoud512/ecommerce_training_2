<?php
ob_start();
include('include/layout/sidebar.php');
include('include/layout/Navbar.php');
  if (empty($_GET['do'])) {
    include('include/layout/sections/index.php');
  }else{
    if($_GET['do']== "edit"){
      include('include/layout/sections/edit_sections.php');
    }
  }
  include('include/layout/Footer.php');
  ob_end_flush();
?>
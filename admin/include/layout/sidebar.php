<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location:login.php');
}
include('include/function/coon.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
              </li>
              
              <!-- Divider -->
              <hr class="sidebar-divider">
              
              <!-- Nav Item - Tables -->
              <li class="nav-item">
                  <a class="nav-link" href="products.php">
                      <i class="fas fa-calendar"></i>
                      <span>Products</span></a>
              </li>
              <!-- Nav Item - Tables -->
              <li class="nav-item">
                  <a class="nav-link" href="categorie.php">
                      <i class="fas fa-calendar"></i>
                      <span>categorie</span></a>
              </li>
              <!-- Nav Item - Tables -->
              <li class="nav-item">
                  <a class="nav-link" href="prand.php">
                      <i class="fas fa-calendar"></i>
                      <span>prand</span></a>
              </li>
              <!-- Nav Item - Tables -->
              <li class="nav-item">
                  <a class="nav-link" href="sections.php">
                      <i class="fas fa-calendar"></i>
                      <span>sections</span></a>
              </li>
              <?php
              $pr_admin = $_SESSION['pr_admin'];
                if ($pr_admin == 1 ) {
                  ?>
                  <!-- Nav Item - Tables -->
                  <li class="nav-item">
                    <a class="nav-link" href="admin.php">
                    <i class="fas fa-calendar"></i>
                    <span>admin</span></a>
                  </li>
                  <?php
                }
              ?>
                            <!-- Nav Item - Tables -->
                            <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                    <i class="fas fa-calendar"></i>
                    <span>log out</span></a>
                  </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

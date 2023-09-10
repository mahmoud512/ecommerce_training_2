<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Lightbox-->
    <link rel="stylesheet" href="assets/vendor/lightbox2/css/lightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="assets/vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel2/assets/owl.theme.default.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <div class="card mb-4" id="forms">
    <div class="card-header">Forms</div>
      <div class="card-body m-5">
        <div class="card-body m-5">
          <form method="POST" action="inc/function/login.php">
            <fieldset>
              <legend>login</legend>
              <?php
              session_start();
                if (isset($_SESSION['error'])) {
                  ?>
                <div class="alert alert-danger"><?=$_SESSION['error']?></div>
                  <?php
                  unset($_SESSION['error']);
                }
              ?>
            
              <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input class="form-control" id="exampleInputEmail" name="email" type="text" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input class="form-control" id="exampleInputPassword" name="pass" type="password" placeholder="Password">
              </div>
              <div class="form-check form-group">
                <input class="form-check-input" id="checkbox-1" type="checkbox">
                <label class="form-check-label" for="checkbox-1">Check me out</label>
              </div>
              <button class="btn btn-primary" type="submit">Submit</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
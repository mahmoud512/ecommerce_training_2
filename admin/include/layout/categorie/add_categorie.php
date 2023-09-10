<?php
include('include/function/coon.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $img_name = $_FILES['cover']['name'];
  $img_size = $_FILES['cover']['size'];
  $img_tmp = $_FILES['cover']['tmp_name'];
  $new_img_name = time() .rand(1 , 10000000) . $img_name ; 
  move_uploaded_file($img_tmp[$i] , "assets/img/upload/$new_img_name");
    $sql ="INSERT INTO `categories`(`name`, `cover`) VALUES ('$name','$new_img_name')";
    $con->query($sql);
    header('location:categorie.php');
}
?>
<!-- nicedit  -->
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<br> 
<div class="container-fluid">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name :</label>
    <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter name" id="name">
  </div>
  <div class="form-group">
    <label for="name">select your imgs :</label>
    <input type="file" class="form-control form-control-sm" name="cover" placeholder="Enter name" id="name">
  </div>
  <br>
  <input type="submit" class="btn btn-primary" value="Add categorie">
  </form>
</div>
<br> <br> <br> <br> <br> <br> <br>
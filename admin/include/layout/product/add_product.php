<?php
include('include/function/coon.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id_admin = $_SESSION['id_admin'];
  $name = $_POST['name'];
  $prise = $_POST['prise'];
  $number_product = $_POST['number_product'];
  $categorie = $_POST['categorie'];
  $prand = $_POST['prand'];
  $description = $_POST['description'];
  $img_name = $_FILES['cover']['name'];
  $img_size = $_FILES['cover']['size'];
  $img_tmp = $_FILES['cover']['tmp_name'];

  function error($error){
      if (empty($error)) {
    $error_send[] =$error .' is required';
  }
  }

  if (empty($prise)) {
    $error_send[] ='the prise is required';
  }
  if (empty($categorie) ) {
    $error_send[] ='the Categorie is required';
  }
  if (empty($prand)) {
    $error_send[] ='the prand is required';
  }
  if (empty($description)) {
    $error_send[] ='the description is required';
  }
  if (empty($number_product)) {
    $error_send[] ='number product is required';
  }
  if (empty($error_send)) {
    $file_count = count($img_name);
    for ($i=0; $i < $file_count; $i++) { 
      $new_img_name[] = time() .rand(1 , 10000000) . $img_name[$i] ; 
      move_uploaded_file($img_tmp[$i] , "assets/img/upload/$new_img_name[$i]");
    }
    $sql ="INSERT INTO `products`(name, description, price, number_product, categorie, brand, saller)
    VALUES ('$name','$description','$prise','$number_product','$categorie','$prand','$id_admin')";
    $con->query($sql);
    $id_pro = mysqli_insert_id($con);
    foreach ($new_img_name as $key => $value) {
      $query = "INSERT INTO `product_imges`(id_pro, img_names) VALUES ('$id_pro','$value')";
      $con->query($query);
    }
    header('location:products.php');
  }
}
?>
<!-- nicedit  -->
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<div class="container-fluid">
  <?php
    if (isset($error_send)) {
      ?>
      <div class="alert alert-danger">
        <?php
          foreach ($error_send as $value) {
            echo '. ' .  $value . "<br>";
          }
        ?>
      </div>
        <?php
    }
  ?>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name :</label>
    <input type="name" class="form-control form-control-sm" name="name" placeholder="Enter name" id="name">
  </div>
  <div class="row">
    <div class="col">
    <label for="prise">prise :</label>
      <input type="number" min="1"  class="form-control form-control-sm" id="prise" placeholder="Enter prise product" name="prise">
    </div>
    <div class="col">
    <label for="number_product">number of the products :</label>
      <input type="number" min="1" class="form-control form-control-sm" id="number_product" placeholder="number of the products" name="number_product">
    </div>
  </div>
  <br>
  <div class="row">
  <div class="col">
    <label for="Categorie">Categorie :</label>
    <select name="categorie" id="Categorie" class="form-control form-control-sm">
      <option value="">select as Categorie</option>
      <?php
      $sql = "SELECT * FROM categories";
      $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
          <?php
        }
      ?>
    </select>
  </div>
    <div class="col">
    <label for="prand">prand :</label>
    <select name="prand" id="prand" class="form-control form-control-sm">
    <option value="">select as prand</option>
      <?php
      $sql = "SELECT * FROM prands";
      $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
          <?php
        }
      ?>
    </select>
  </div>
  </div>
  <br>
  <div class="form-group">
    <label for="cover">select img the product  :</label>
    <input type="file" name="cover[]" id="cover" multiple='multiple' class="form-control form-control-sm">
    <span class="text-danger">
      <?php
        // if (isset($error)) {
        //     echo $error ."<br>";
        // }
        // if (isset($error1)) {
        //     echo $error1;
        // }
      ?>
    </span>
  </div>
  <div class="form-group">
    <label for="description">description :</label>
    <textarea name="description" id="description" class="form-control form-control-sm" rows="6"></textarea>
  </div>
  <input type="submit" class="btn btn-primary" value="Add product">
  </form>
</div>
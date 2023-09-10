<?php
    $id_product = $_GET['id'];
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id_admin = $_SESSION['id_admin'];
    $name = $_POST['name'];
    $prise = $_POST['prise'];
    $number_product = $_POST['number_product'];
    $categorie = $_POST['categorie'];
    $prand = $_POST['prand'];
    $description = $_POST['description'];
    $error_img = $_FILES['cover']['error'];
  if ($error_img == 0 ) {
    $img_name = $_FILES['cover']['name'];
    $img_size = $_FILES['cover']['size'];
    $img_tmp = $_FILES['cover']['tmp_name'];
    $type_img = ["png" , "jpg" , "gif" , "jpeg"];
    $explode_name_img = explode(".", $img_name);
    $explode_name_img_end = end($explode_name_img);
  if (!in_array($explode_name_img_end , $type_img)) {
    $error = 'the type img is not incorrect';
  }
  if ($img_size > 5000000) {
    $error1 = 'the image size is large';
  }
  if (empty($error) and empty($error1)) {
    $new_img_name = time() .rand(1 , 10000000) . $img_name ; 
    move_uploaded_file($img_tmp , "assets/img/upload/$new_img_name");
    $sql ="UPDATE `products` SET name='$name',`description`='$description',`price`='$prise',
    `number_product`='$number_product',`categorie`='$categorie',`brand`='$prand',`saller`='$id_admin',`cover`='$new_img_name' WHERE id = $id_product";
    $con->query($sql);
    header('location:products.php');
  }
  }else{
    $sql ="UPDATE `products` SET name='$name',`description`='$description',`price`='$prise',
    `number_product`='$number_product',`categorie`='$categorie',`brand`='$prand',`saller`='$id_admin' WHERE id = $id_product";
    $con->query($sql);
    header('location:products.php');
  }

}
?>
<!-- nicedit  -->
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<div class="container-fluid">
  <?php
    $sql = "SELECT * FROM `products` WHERE id = $id_product";
    $result_pro = $con->query($sql);
    while ($row_pro = $result_pro->fetch_assoc()) {
  ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">name :</label>
      <input type="name" class="form-control form-control-sm" value="<?=$row_pro['name']?>" name="name" placeholder="Enter name" id="name">
    </div>
    <div class="row">
      <div class="col">
      <label for="prise">prise :</label>
        <input type="number" min="1" value="1" value="<?=$row_pro['price']?>" class="form-control form-control-sm" id="prise" placeholder="Enter prise product" name="prise">
      </div>
      <div class="col">
      <label for="number_product">number of the products :</label>
        <input type="number" min="1" value="1" value="<?=$row_pro['number_product']?>" class="form-control form-control-sm" id="number_product" placeholder="number of the products" name="number_product">
      </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <label for="Categorie">Categorie :</label>
      <select name="categorie" id="Categorie" class="form-control form-control-sm">
        <?php
        $sql = "SELECT * FROM categories";
        $result = $con->query($sql);
        $categorie = $row_pro['categorie'];
        $x=0;
          while ($row = $result->fetch_assoc()) {
            $x++
            ?>
              <option value="<?=$row['id']?>" <?php  
                if ($x == $categorie) {
                  echo "selected";
                }
              ?> > <?=$row['name']?></option>
            <?php
          }
        ?>
      </select>
    </div>
      <div class="col">
      <label for="prand">prand :</label>
      <select name="prand" id="prand" class="form-control form-control-sm">
        <?php
        $sql = "SELECT * FROM prands";
        $result = $con->query($sql);
        $categorie = $row_pro['prand'];
        $y=0;
          while ($row = $result->fetch_assoc()) {
            ?>
              <option value="<?=$row['id']?>" <?php  
                if ($y == $categorie) {
                  echo "selected";
                }
              ?>><?=$row['name']?></option>
            <?php
          }
        ?>
      </select>
    </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
      <label for="cover">select img the product  :</label>
      <input type="file" name="cover" id="cover" class="form-control form-control-sm">
      <span class="text-danger">
        <?php
          if (isset($error)) {
              echo $error ."<br>";
          }
          if (isset($error1)) {
              echo $error1;
          }
        ?>
      </span>
      </div>
      <div class="col">
        <img style="width: 300px; height: 100px;" src="assets/img/upload/<?=$row_pro['cover']?>" class="img-thumbnail">
      </div>
    </div>
    <div class="form-group">
      <label for="description">description :</label>
      <textarea name="description" id="description" class="form-control form-control-sm" rows="6">
      <?=$row_pro['description']?>
      </textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="update product">
    </form>
  </div>
      <?php
    }
  ?>

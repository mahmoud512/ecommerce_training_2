<?php
include('include/function/coon.php');

$id_categorie = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $sql ="UPDATE `categories` SET name='$name' WHERE id = $id_categorie";
    $con->query($sql);
    header('location:categorie.php');
}
?>
<!-- nicedit  -->
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<br> 
<?php
    $sql = "SELECT * FROM `categories` WHERE id = $id_categorie";
    $result_cat = $con->query($sql);
    while ($row_cat = $result_cat->fetch_assoc()) {
      ?>
<div class="container-fluid">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name :</label>
    <input type="name" value="<?=$row_cat['name']?>" class="form-control form-control-sm" name="name" placeholder="Enter name" id="name">
  </div>
  <br>
  <input type="submit" class="btn btn-primary" value="Add categorie">
  </form>
</div>
<?php
    }
  ?>
<br> <br> <br> <br> <br> <br> <br>
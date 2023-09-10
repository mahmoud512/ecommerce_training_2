<?php
include('include/function/coon.php');

$id_sections = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $sql ="UPDATE `pr` SET name='$name' WHERE id = $id_sections";
    $con->query($sql);
    header('location:sections.php');
}
?>
<!-- nicedit  -->
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<br> 
<?php
    $sql = "SELECT * FROM `pr` WHERE id = $id_sections";
    $result_sections = $con->query($sql);
    while ($row_sections = $result_sections->fetch_assoc()) {
      ?>
<div class="container-fluid">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name :</label>
    <input type="name" value="<?=$row_sections['name']?>" class="form-control form-control-sm" name="name" placeholder="Enter name" id="name">
  </div>
  <br>
  <input type="submit" class="btn btn-primary" value="update prand">
  </form>
</div>
<?php
    }
  ?>
<br> <br> <br> <br> <br> <br> <br>
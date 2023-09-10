<?php
include('include/function/coon.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
    $sql ="INSERT INTO `pr`(name) VALUES ('$name')";
    $con->query($sql);
    header('location:sections.php');
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
    <input type="name" class="form-control form-control-sm" name="name" placeholder="Enter name" id="name">
  </div>
  <br>
  <input type="submit" class="btn btn-primary" value="Add sections">
  </form>
</div>
<br> <br> <br> <br> <br> <br> <br>
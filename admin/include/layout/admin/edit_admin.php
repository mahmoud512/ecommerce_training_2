<?php
include('include/function/coon.php');

$id_admin = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $pr = $_POST['pr'];
    $active = $_POST['active'];
    $date_time = date('y-m-d h:m:s');
    $sql ="UPDATE `admin` SET name='$name',active=$active,pr=$pr, `update`='$date_time' WHERE id = $id_admin";
    $con->query($sql);
    header('location:admin.php');
}
?>
<!-- nicedit  -->
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<br> 
<?php
    $sql = "SELECT * FROM `admin` WHERE id = $id_admin";
    $result_admin = $con->query($sql);
    while ($row_admin = $result_admin->fetch_assoc()) {
      ?>
<div class="container-fluid">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name :</label>
    <input type="name" value="<?=$row_admin['name']?>" class="form-control form-control-sm" name="name" placeholder="Enter name" id="name">
  </div>
  <div class="form-group">
      <label for="section">section :</label>
      <select name="pr" id="section" class="form-control">
        <?php
        $sql = "SELECT * FROM pr";
        $result = $con->query($sql);
        $section = $row_admin['pr'];
        $x=0;
          while ($row = $result->fetch_assoc()) {
            $x++
            ?>
              <option value="<?=$row['id']?> " <?php  
                if ($x == $section) {
                  echo "selected";
                }
              ?> > <?=$row['name']?></option>
            <?php
          }
        ?>
      </select>
    </div>
  <div class="form-group">
      <label for="active">active :</label>
      <select name="active" id="active" class="form-control">
      <option value="0" <?php 
      $section_active = $row_admin['active']; 
                if ($section_active == 0) {
                  echo "selected";
                }
              ?>
              >no active</option>
      <option value="1"  <?php 
      $section_active = $row_admin['active']; 
                if ($section_active == 1) {
                  echo "selected";
                }
              ?>
              >active</option>
      </select>
    </div>
  <br>
  <input type="submit" class="btn btn-primary" value="update prand">
  </form>
</div>
<?php
    }
  ?>
<br> <br> <br> <br> <br> <br> <br>
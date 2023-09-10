  <div class="container-fluid">
    <div style="display: flex; justify-content: space-between;">
    <div class="x">
      <a href="?do=add" class="btn btn-primary">Add Products <i class="fas fa-plus-circle ml-2"></i></a>
    </div>
      <h1 style="text-align: center;">ALL Products</h1>
    </div>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
  <tr>
    <th>#</th>
    <th>name</th>
    <th>price</th>
    <th>number_product</th>
    <th>brand</th>
    <th>view</th>
    <th>saller</th>
    <th>cover</th>
    <th>action</th>
  </tr>
</thead>
                                    <tfoot>
                                        <tr>
                                          <th>#</th>
                                          <th>name</th>
                                          <th>price</th>
                                          <th>number_product</th>
                                          <th>brand</th>
                                          <th>view</th>
                                          <th>saller</th>
                                          <th>cover</th>
                                          <th>action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
  <?php
  $sql = "SELECT * FROM products";
  $result =$con->query($sql);
  $x = 0;
  while ($row = $result->fetch_assoc()) {
    $x++;
    ?>
      <tr>
        <td><?=$x?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['price']?></td>
        <td><?=$row['number_product']?></td>
        <td><?=$row['brand']?></td>
        <td><?=$row['view']?></td>
        <td><?php
        $id_saller = $row['saller'];
        $sql0 = "SELECT * FROM `admin` WHERE id= $id_saller";
        $result0 = $con->query($sql0);
        $row0 = $result0->fetch_assoc();
        echo $row0['name'];
        ?></td>
        <td style="width: 205px; text-align: center;"><img style="width: 200px; text-align: center; height: 80px;" src="assets/img/upload/<?php
        $pro_id = $row['id'];
        $query = "SELECT * FROM `product_imges` WHERE id_pro = $pro_id";
        $result_img = $con ->query($query);
        echo $result_img->fetch_assoc()['img_names'];
        

        ?>"> </td>
        <td><a href="?id=<?=$row['id']?>&do=edit" class="btn btn-primary btn-sm">تعديل</a>
        <button type="button" class="btn btn-danger btn-sm delete" data-toggle="modal" data-target="#myModal<?=$row['id']?>"> حذف </button>

        <!-- The Modal -->
<div class="modal" id="myModal<?=$row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> هل انت متاكد من حذف : <?=$row['name']?> </h4>
        <button type="button" class="btn-close" data-dismiss="modal">x</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      هل انت متاكد من حذف : <?=$row['name']?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="include/function/product_fun/delete.php?id=<?=$row['id']?>" class="btn btn-danger btn-sm">نعم</a>
        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">لا</button>
      </div>

    </div>
  </div>
</div>
        </td>
      </tr>
    <?php
  }
  ?>
  </tbody>  
                                </table>
                            </div>
                        </div>
                    </div>
  
  </div>

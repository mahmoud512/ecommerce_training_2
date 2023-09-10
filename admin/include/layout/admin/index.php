<div class="container-fluid">
      <h1 style="text-align: center;">ALL admin</h1>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
  <tr>
    <th>#</th>
    <th>name</th>
    <th>active</th>
    <th>section</th>
    <th>create_ad</th>
    <th>update</th>
    <th>action</th>
  </tr>
</thead>
                                    <tfoot>
                                        <tr>
                                          <th>#</th>
                                          <th>name</th>
                                          <th>active</th>
                                          <th>section</th>
                                          <th>create_ad</th>
                                          <th>update</th>
                                          <th>action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
  <?php
  $sql = "SELECT * FROM admin";
  $result =$con->query($sql);
  $x = 0;
  while ($row = $result->fetch_assoc()) {
    $x++;
    ?>
      <tr>
        <td><?=$x?></td>
        <td><?=$row['name']?></td>
        <td><?php
        $num_active = $row['active'];
        if ($num_active == 0) {
          echo 'no active';
        }else{
          echo 'active';
        }
        ?></td>
        <td><?php
         $section =$row['pr'];
         $sql_sec = "SELECT * FROM pr WHERE id = $section";
         $result_sec = $con->query($sql_sec);
         $row_sec = $result_sec->fetch_assoc();
         echo $row_sec['name'];
         ?></td>
        <td><?=$row['create_ad']?></td>
        <td><?=$row['update']?></td>
        <td style="text-align: center;"><a href="?id=<?=$row['id']?>&do=edit" class="btn btn-primary btn-sm">تعديل</a>
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?=$row['id']?>"> حذف </button>

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
        <a href="include/function/admin_fun/delete.php?id=<?=$row['id']?>" class="btn btn-danger btn-sm">نعم</a>
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

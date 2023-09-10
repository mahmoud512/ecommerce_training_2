<?php
include 'inc/layout/header.php';
$name_elsearch = $_GET['search'];
?>
<section class="py-5">
        <div class="container">
          <header>
            <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
            <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
          </header>
          <div class="row">
            <!-- PRODUCT-->
            <?php
              $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$name_elsearch%'";
              $result = $conn->query($sql);
              while ($row = $result->fetch_assoc()) {
                $id_pro = $row['id'];
              ?>
              <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white badge-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="../admin/assets/img/upload/<?php
                      $query = "SELECT * FROM product_imges WHERE id_pro = $id_pro";
                      $result0 =$conn->query($query);
                      $rows = $result0->fetch_assoc();
                      echo $rows['img_names'];
                    ?>" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                      <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.html"><?=$row['name']?></a></h6>
                <p class="small text-muted"><?=$row['price']?></p>
              </div>
            </div>
              <?php
              }
            ?>
            
          </div>
        </div>
        </section>
<?php
include 'inc/layout/footer.php';
?>
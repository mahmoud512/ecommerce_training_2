<?php
include 'inc/layout/header.php';
?>
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
                <div class="col-lg-6">
                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="p-5 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.php">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">products</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Categories</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                  <?php 
                    $sql_cat = "SELECT * FROM categories LIMIT 4";
                    $result_cat = $conn->query($sql_cat);
                    while ($row_cat = $result_cat->fetch_assoc()) {
                      ?>
                    <li class="mb-2"><a class="reset-anchor" href="?id_cat=<?=$row_cat['id']?>"><?=$row_cat['name']?></a></li>
                      <?php
                    }
                  ?>
                  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle p-0" href="" id="navbardrop" data-toggle="dropdown">
        more
      </a>
      <div class="dropdown-menu">
                  <?php 
                    $sql_cat1 = "SELECT * FROM categories limit 15 OFFSET 4";
                    $result_cat1 = $conn->query($sql_cat1);
                    while ($row_cat1 = $result_cat1->fetch_assoc()) {
                  ?>
        <a class="dropdown-item" href="?id_cat=<?=$row_cat['id']?>"><?=$row_cat1['name']?></a>
        <?php
                    }
        ?>
      </div>
    </li>
                </ul>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">prands</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                <?php 
                    $sql_cat = "SELECT * FROM prands LIMIT 4";
                    $result_cat = $conn->query($sql_cat);
                    while ($row_cat = $result_cat->fetch_assoc()) {
                      ?>
                    <li class="mb-2"><a class="reset-anchor" href="?id_prand=<?=$row_cat['id']?>"><?=$row_cat['name']?></a></li>
                      <?php
                    }
                  ?>
                  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle p-0" href="" id="navbardrop" data-toggle="dropdown">
        more
      </a>
      <div class="dropdown-menu">
                  <?php 
                    $sql_cat1 = "SELECT * FROM prands limit 15 OFFSET 4";
                    $result_cat1 = $conn->query($sql_cat1);
                    while ($row_cat1 = $result_cat1->fetch_assoc()) {
                  ?>
        <a class="dropdown-item" href="?id_prand=<?=$row_cat['id']?>"><?=$row_cat1['name']?></a>
        <?php
                    }
        ?>
      </div>
    </li>
                </ul>


              </div>
              <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-small text-muted mb-0">Showing 1–12 of 53 results</p>
                  </div>
                  <div class="col-lg-6">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" id="go">
                      <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                      <!-- <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th-large"></i></a></li>
                      <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th"></i></a></li> -->
                      <li class="list-inline-item">
                        <select class="selectpicker ml-auto" name="sorting" onchange="document.getElementById('go').submit()">
                          <option value="default">Default sorting</option>
                          <option value="popularity">Popularity</option>
                          <option value="low-high">Price: Low to High</option>
                          <option value="high-low">Price: High to Low</option>
                        </select>
                      </li>
                    </ul>
                    </form>
                  </div>
                </div>
                <div class="row">
                <?php
                if (!isset($_GET['nun_page'])) {
                  $nun_page = 0;
                }else{
                  $nun_page = ($_GET['nun_page']-1) * 3 ;
                }
                if (isset($_POST['sorting'])) {
                  $sorting = $_POST['sorting'];
                }
                if (!isset($sorting)) {
                  $sql = "SELECT * FROM products LIMIT 3 OFFSET $nun_page ";
                }elseif ($sorting == "popularity") {
                  $sql = "SELECT * FROM products ORDER BY num_sela ASC LIMIT 3 OFFSET $nun_page";
                }elseif ($sorting == "low-high") {
                  $sql = "SELECT * FROM products ORDER BY price ASC LIMIT 3 OFFSET $nun_page";
                }elseif ($sorting == "high-low") {
                  $sql = "SELECT * FROM products ORDER BY price DESC LIMIT 3 OFFSET $nun_page";
                }
                $result =$conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                  $id_pro = $row['id'];
              ?>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php?id_pro=<?=$row['id']?>"><img style="width: 100%; height: 300px;" class="img-fluid w-100" src="../admin/assets/img/upload/<?php
                      $query = "SELECT * FROM product_imges WHERE id_pro = $id_pro";
                      $result0 =$conn->query($query);
                      $rows = $result0->fetch_assoc();
                      echo $rows['img_names'];
                    ?>" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="inc/function/add_to_cart.php?id_pro=<?=$row['id']?>">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="detail.php"><?=$row['name']?></a></h6>
                      <p class="small text-muted">$<?=$row['price']?></p>
                    </div>
                  </div>
                  <?php
                }
                ?>
                </div>            
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <?php
                      $query_count_rows = 'SELECT * FROM products';
                      $result_nun_rows = $conn->query($query_count_rows);
                      $nun_rows = mysqli_num_rows($result_nun_rows);
                      $nun_rows_page = $nun_rows / 3;
                      if (is_float($nun_rows_page)){
                        $nun_rows_page = $nun_rows_page + 1;
                      }
                      for ($i=1; $i <= $nun_rows_page; $i++) { 
                        ?>
                          <li class="page-item "><a class="page-link" href="?nun_page=<?=$i?>"><?=$i?></a></li>
                        <?php
                      }
                    ?>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php
        include 'inc/layout/footer.php';
      ?>
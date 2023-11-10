<?php
require('Includes/config.php');

if (isset($_GET['id'])) {
    $productid = $_GET['id'];
    $sql = "SELECT * FROM `addproduct` WHERE `pid` = '$productid'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo ' <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="product-fade">
              <div class="product-fade-wrap">
                  <div id="product-image" class="">
                      <div class="item"><img src="' . 'images/' . $row['pimage'] . '" alt="" class="img-responsive"></div>
                  </div>
                  <div class="product-fade-ct">
                      <div class="product-fade-control">
                          <div class="to-left">
                              <a href="" style="font-size: 50%; margin-top: -10px;"><i class="fa fa-heart"></i></a>
                              <a href=""style="font-size: 50%;"><i class="fa fa-retweet"></i></a>
                              <a href=""style="font-size: 50%;"><i class="fa fa-search"></i></a>
                          </div>
                         
                          <div class="clearfix"></div>
                          <a href="singleproduct.php?pid= ' . $row["pid"] . '" class="btn btn-to-cart"style="font-size: 60%; width: 75%; height: 30%;"><span class="bag"></span><span>View Product</span><div class="clearfix"></div></a>
                      </div>
                      
                  </div>
              </div>
        </div>
        
        <div class="product-name">
            <a href="">' . $row['ptitle'] . '</a>
        </div>
        <div class="star-1"></div>
        <div class="product-price">
            <span>' . $row['pprice'] . '</span>
        </div>
    </div>';
    } else {
        echo "Product details not found";
    }
}

$connection->close();
?>
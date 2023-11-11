<?php
include('includes/navbar.php');
include('includes/config.php');

$current_user_id = $_SESSION['userid'];

?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="content-offers" style="background:url(images/products.jpg); background-size: cover; margin-top:40px; height: 150px;" style="background-color:black; color:white;">

    <div class="container" style=" color:white;">
        <div class="ct-offers">
            <div class="ct-offers-title" style="color: white; margin-left: 80px;">Bill Details</div>

        </div>
    </div>
</div>




<section class="ftco-section" style="background:white; color: black;">
    <div class="container">
        <a href="products.php" class="btn btn-primary"> Continue Shopping</a>
        <div class="row" style="font-size:20px;">
            
            <!-- start -->
            <div class="col-md-6 col-sm-6 col-xsm-6">
                <?php
                $productsfetch = "SELECT * from booked where `userid` = '$current_user_id'";
                $runquery = mysqli_query($connection, $productsfetch);
                if (mysqli_num_rows($runquery) > 0) {
                    while ($data = mysqli_fetch_assoc($runquery)) {
                ?>
                <hr style=" border: none;height: 2px;background-color: #333;">
                <div style="margin-top:20px ">

                    <h1>
                        <?php echo $data['First Name'] . ' ' . $data['Last Name']; ?>
                    </h1>
                    <p class="price"><span>
                        <?php echo $data['Country'] . '<br> ' . $data['address'] . ' ' . $data['Appartment']; ?>
                    </span></p>
                    <p>
                        <?php echo $data['phone']; ?>
                    </p>
                    <p>
                        <?php echo $data['email']; ?>
                    </p>
                </div>

                <?php
                    }
                }
                ?>
            </div>
            <!-- END -->
            <!-- start -->
            <div class="col-md-6 col-sm-6 col-xsm-6">
                <?php

                $cart_data = "SELECT * from cart AS c INNER JOIN `user-register` AS user ON c.userid = user.id INNER JOIN addproduct AS p ON p.pid = c.proid WHERE c.userid = '$current_user_id' AND c.`updatestatus` = 'pending'";
                $result = mysqli_query($connection, $cart_data);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <hr style=" border: none;height: 2px;background-color: #333;">
                        <div class="row" style="margin-top:35px">
                            <input type="hidden" id="userid" value="<?php echo $_SESSION['userid'] ?>">
                            <input type="hidden" id="proid" value="<?php echo $row['pid'] ?>">
                            <div class="col-md-6 col-sm-6 col-xsm-6">

                                <img src="<?php echo 'images/' . $row['pimage']; ?>" alt="" class="img-responsive" name="product-image" height="150px" width="150px">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xsm-6">

                                <h2 class="card-title">
                                    <?php echo $row['ptitle'] ?>
                                </h2>
                                <p class="card-text">
                                    <?php echo $row['pdescription'] ?>
                                    <br>
                                    <?php echo $row['updatestatus'] ?>
                                </p>
                                <p class="card-text"><small class="text-body-secondary">
                                        <?php echo $row['pprice'] ?>
                                    </small></p>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
            <!-- END -->

            <!-- start -->

            <!-- END -->
        </div>
    </div>
</section>


</div>
<br>
<br>
<?php
include("includes/footer.php");
?>
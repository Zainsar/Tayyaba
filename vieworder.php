<?php
include('includes/navbar.php');
include('includes/config.php');


?>

<div class="content-offers"
    style="background:url(images/products.jpg); background-size: cover; margin-top:40px; height: 150px;"
    style="background-color:black; color:white;">

    <div class="container" style=" color:white;">
        <div class="ct-offers">
            <div class="ct-offers-title" style="color: white; margin-left: 80px;">Bill Details</div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <?php
        $productsfetch = "SELECT * from booked";
        $runquery = mysqli_query($connection, $productsfetch);
        if (mysqli_num_rows($runquery) > 0) {
            while ($data = mysqli_fetch_assoc($runquery)) {
                ?>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <input type="hidden" id="userid" value="<?php echo $_SESSION['userid']; ?>">
                    <input type="hidden" id="proid" value="<?php echo $data['id']; ?>">
                    <div class="">
                        <h3>
                            <?php echo $data['First Name'] . ' ' . $data['Last Name']; ?>
                        </h3>
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
        <?php
        $current_user_id = $_SESSION['userid'];

        $cart_data = "SELECT * from cart AS c INNER JOIN `user-register` AS user ON c.userid = user.id INNER JOIN addproduct AS p ON p.pid = c.proid WHERE c.userid = '$current_user_id' AND c.`cartstatus` = 0";
        $result = mysqli_query($connection, $cart_data);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <!-- product card -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <input type="hidden" id="userid" value="<?php echo $_SESSION['userid'] ?>">
                            <input type="hidden" id="proid" value="<?php echo $row['pid'] ?>">
                            <div class="col-md-4">
                                <img src="<?php echo 'images/' . $row['pimage']; ?>" alt="" class="img-responsive"
                                    name="product-image" height="200px" width="200px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $row['ptitle'] ?>
                                    </h5>
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
                        </div>
                    </div>
                    <!-- product card end -->
                </div>
                <?php
            }
        }

        ?>
    </div>




</div>
</div>
<br>
<br>
<?php
include("includes/footer.php");
?>
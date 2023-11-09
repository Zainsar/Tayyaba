<?php
include('includes/navbar.php');
include('includes/config.php');


?>

<div class="content-offers"
    style="background:url(images/products.jpg); background-size: cover; margin-top:40px; height: 150px;">

    <div class="container">
        <div class="ct-offers">
            <div class="ct-offers-title" style="color: white; margin-left: 80px;">Bill Details</div>

        </div>
    </div>
</div>
<div class="tayyaba container p-3" style="display: flex; justify-content:center;">
    <?php
    $productsfetch = "SELECT * from booked";
    $runquery = mysqli_query($connection, $productsfetch);
    if (mysqli_num_rows($runquery) > 0) {
        while ($row = mysqli_fetch_assoc($runquery)) {
            ?>
            <section class="ftco-section">
                <div class="container">
                    <div id="msg">

                    </div>
                    <div class="row">
                        <div class="col-lg-6 ftco-animate">
                            <input type="hidden" id="userid" value="<?php echo $_SESSION['userid'] ?>">
                            <input type="hidden" id="proid" value="<?php echo $row['id'] ?>">
                        </div>
                        <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                            <h3>
                                <?php echo $row['First Name'] . ' ' . $row['Last Name'] ?>
                            </h3>
                            <p class="price"><span>
                                    <?php echo $row['Country'] . '<br> ' . $row['address'] . ' ' . $row['Appartment'] ?>
                                </span></p>
                            <p>
                                <?php echo $row['phone'] ?>
                            </p>
                            <p>
                                <?php echo $row['email'] ?>
                            </p>

                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }

    ?>
    <?php
    $current_user_id = $_SESSION['userid'];

    $cart_data = "SELECT * from cart AS c INNER JOIN `user-register` AS user ON c.userid = user.id INNER JOIN addproduct AS p ON p.pid = c.proid WHERE c.userid = '$current_user_id'";
    $result = mysqli_query($connection, $cart_data);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {


            ?>
            <section class="ftco-section">
                <div class="container">
                    <div id="msg">

                    </div>
                    <div class="row">
                        <div class="col-lg-2 ftco-animate">
                            <input type="hidden" id="userid" value="<?php echo $_SESSION['userid'] ?>">
                            <input type="hidden" id="proid" value="<?php echo $row['pid'] ?>">
                            <div class="item"><img src="<?php echo 'images/' . $row['pimage']; ?>" alt="" class="img-responsive"
                                    name="product-image" height="200px" width="200px"></div>
                        </div>
                        <div class="col-lg-4 product-details pl-md-5 ftco-animate">
                            <h3>
                                <?php echo $row['ptitle'] ?>
                            </h3>
                            <p class="price"><span>
                                    <?php echo $row['pprice'] ?>
                                </span></p>
                            <p>
                                <?php echo $row['pdescription'] ?>
                            </p>

                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }

    ?>
</div>
<br>
<br>
<?php
include("includes/footer.php");
?>
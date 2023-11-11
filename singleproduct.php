<?php
include('includes/navbar.php');
include('includes/config.php');


?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="content-offers"
    style="background:url(images/products.jpg); background-size: cover; margin-top:40px; height: 150px;">

    <div class="container">
        <div class="ct-offers">
            <div class="ct-offers-title" style="color: white; margin-left: 80px;">Products Details</div>

        </div>
    </div>
</div>
<?php
if (isset($_GET['pid'])) {
    $pro_id = $_GET['pid'];
} else {
    $pro_id = 1;
}
if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
} else {
    $userid = '';
}
$productsfetch = "SELECT * from addproduct WHERE `pid` = '$pro_id'";
$runquery = mysqli_query($connection, $productsfetch);
if (mysqli_num_rows($runquery) > 0) {
    while ($row = mysqli_fetch_assoc($runquery)) {
        ?>
        <section class="ftco-section">
            <div class="container">
                <div id="msg">

                </div>

                <div class="row">
                    <div class="col-lg-6 mb-5 ftco-animate">
                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                        <input type="hidden" id="proid" value="<?php echo $row['pid']; ?>">
                        <div class="item"><img src="<?php echo 'images/' . $row['pimage']; ?>" alt="" class="img-responsive"
                                name="product-image"></div>
                    </div>
                    <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                        <h3>
                            <?php echo $row['ptitle'] ?>
                        </h3>
                        <p class="price"><span>
                                <?php echo $row['pprice'] ?>
                            </span></p>
                        <p>
                            <?php echo $row['pdescription'] ?>
                        </p>

                        <div class="row mt-4">
                            <div class="w-100"></div>
                            <div class="input-group col-md-6 d-flex mb-3">

                                <?php
                                echo '<select class="form-control input-number" name="qty" id="qty">';

                                for ($i = 0; $i <= 10; $i++) {
                                    echo '<option class="form-control input-number value="' . $i . '">' . $i . '</option>';

                                }
                                ?>

                                </select>
                            </div>
                        </div>
                        <br>

                        <input type="submit" value="Add to Cart" class="btn btn-primary" id="addtocart" name="add_to_cart"><span
                            class="bag"></span>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        // add to cart
        let addtocart = $('#addtocart')
        let proid = $('#proid').val();
        let userid = $('#userid').val();
        let title = $('#title').text();
        let price = $('#price').text();
        let qty = $('#qty');
        // let alertdiv = $('#alert');
        // let format = $('#format:checked').val();

        addtocart.on('click', function () {
            $.ajax({
                url: 'addtocart.php',
                type: 'POST',
                data: {
                    proid: proid,
                    userid: userid,
                    title: title,
                    price: price,
                    qty: qty.val(),
                },
                success: function (data) {
                    document.write(data)
                }
            });
        });




    });
</script>

<?php
include('includes/footer.php')
    ?>
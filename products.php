<?php
include('includes/navbar.php');
include('includes/config.php');


?>
<div class="content-offers"
    style="background:url(images/prod.jpg); background-size: cover; margin-top:40px; height: 150px;background-color:black; color:white;">

    <div class="container">
        <div class="ct-offers">
            <div class="ct-offers-title" style="color: white; margin-left: 80px;">Our Products</div>

        </div>
    </div>
</div>
<div id="content"> <!-- Content -->
    <div class="container" id="container1">
        <div class="home-content">
            <div class="cat-offers">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cat-sec-1">
                            <div class="cat-desc">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cat-sec-2">
                            <div class="cat-desc">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cat-sec-3">
                            <div class="cat-desc">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="newest" id="newest">
        <div class="container">
            <div class="newest-content">
                <div class="newest-tab">
                    <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                        <li role="presentation" class="active">
                            <a id="cat-1" role="tab" data-toggle="tab" aria-controls="1"
                                aria-expanded="true">Feature</a>
                        </li>
                        <li role="presentation">
                            <a role="tab" id="cat-2" data-toggle="tab" aria-controls="2">Jewelery</a>
                        </li>
                        <li role="presentation">
                            <a role="tab" id="cat-3" data-toggle="tab" aria-controls="3">Cosmetics</a>
                        </li>
                    </ul>

                    <form class="d-flex" role="search" style="margin-bottom:30px;padding:20px">
                        <input type="text" id="hospital-search" style="padding:25px" class="form-control me-2"
                            placeholder="Search product">
                        <div id="suggestions-container"></div>
                    </form>

                    <div id="hospital-details" style="display: none;"></div>


                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                            <div class="row clearfix" id="result">
                                <?php
                                if (isset($_SESSION['userid'])) {
                                    $userid = $_SESSION['userid'];
                                } else {
                                    $userid = '';
                                }
                                $productsfetch = "SELECT * from addproduct";
                                $runquery = mysqli_query($connection, $productsfetch);
                                if (mysqli_num_rows($runquery) > 0) {
                                    while ($row = mysqli_fetch_assoc($runquery)) {

                                        ?>
                                        <div class="col-md-4 col-lg-2 col-sm-12">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image" class="">
                                                        <input type="hidden" id="proid" value="<?php echo $row['pid']; ?>" ;>
                                                        <input type="hidden" id="userid" value="<?php echo $userid ?>">
                                                        <div class="item"><img src="<?php echo 'images/' . $row['pimage']; ?>"
                                                                alt="" class="img-responsive" name="product-image"></div>
                                                    </div>
                                                    <div class="product-fade-ct">
                                                        <div class="product-fade-control">
                                                            <div class="to-left">
                                                                <a href="" style="font-size: 50%; margin-top: -10px;"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="" style="font-size: 50%;"><i
                                                                        class="fa fa-retweet"></i></a>
                                                                <a href="" style="font-size: 50%;"><i
                                                                        class="fa fa-search"></i></a>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <a href="singleproduct.php?pid=<?php echo $row['pid'] ?>"
                                                            style="font-size: 60%; width: 75%; height: 30%;"
                                                            class="btn btn-to-cart">View Product</a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-name" name="product-title">
                                                <a href="">
                                                    <?php echo $row['ptitle']; ?>
                                                </a>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" id="qty"
                                                    placeholder="Quantity" name="quan" required>
                                            </div>
                                            <div class="star-1"></div>
                                            <div class="product-price" name="product-price">
                                                <span>
                                                    <?php echo $row['pprice']; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

                        <script>
                            $(document).ready(function () {
                                $('#hospital-search').on('input', function () {
                                    let query = $(this).val();
                                    console.log('Query:', query);
                                    if (query.trim() === '') {
                                        $('#suggestions-container').empty();
                                        return;
                                    }
                                    $.ajax({
                                        url: 'search.php',
                                        method: 'GET',
                                        data: { query: query },
                                        success: function (data) {
                                            $('#suggestions-container').html(data);
                                        }
                                    });
                                });

                                $(document).on('click', '.suggestion', function () {
                                    let hospitalId = $(this).data('hospital-id');
                                    console.log('Hospital ID:', hospitalId);
                                    let hospitalName = $(this).text();

                                    $.ajax({
                                        url: 'fetch_hospital_details.php',
                                        method: 'GET',
                                        data: { id: hospitalId },
                                        success: function (data) {
                                            $('#result').html(data).show();
                                            $('#suggestions-container').empty();
                                            $('#hospital-search').val(ptitle);
                                        }
                                    });
                                });
                            });

                        </script>




                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="content"> <!-- Content -->
        <div class="container" id="container1">
            <div class="home-content">
                <div class="cat-offers">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cat-sec-1">
                                <div class="cat-desc">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cat-sec-2">
                                <div class="cat-desc">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cat-sec-3">
                                <div class="cat-desc">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="content-offers" style="background:url(images/slider5.jpg); background-size: cover;">

            <div class="container">
                <div class="ct-offers">
                    <div class="ct-offers-title" style="color: white; margin-left: 80px;">Stylish Jewelery</div>
                    <p style="color: white;margin-left: 80px;">The generated Lorem Ipsum is therefore always free from
                        repetition, injected humour</p>
                    <a href="" class="btn btn-blue" style="margin-left: 80px;">Discover more Product</a>
                </div>
            </div>
        </div>

        <div class="brands">
            <div class="container">
                <div class="brands-inner">
                    <div class="brand-title">
                        <span>My Online Store</span>
                    </div>

                    <div id="slider-home"> <!-- Slider -->
                        <div id="brand-carousel" class="owl-carousel owl-theme">
                            <div class="item">
                                <h2>Jenny</h2>

                            </div>
                            <div class="item">
                                <h2>Cosmetics</h2>
                            </div>
                            <div class="item">
                                <h2>&</h2>
                            </div>
                            <div class="item">
                                <h2>Jewellery</h2>
                            </div>
                            <div class="item">
                                <h2>Store</h2>
                            </div>
                            <div class="item">
                                <h2>Online</h2>
                            </div>
                            <div class="item">
                                <h2>Shopping</h2>
                            </div>
                            <div class="item">
                                <h2>Platform</h2>
                            </div>
                            <div class="item">
                                <h2>Let's Go</h2>
                            </div>
                            <div class="item">
                                <h2>Shopping</h2>
                            </div>
                        </div>
                    </div> <!-- Slider -->

                </div>
            </div>
        </div>


    </div> <!-- Content -->
</div>
<?php
include('includes/footer.php')
    ?>
<?php
include('includes/navbar.php');
include('includes/config.php');
?>
<style>
    #div-img {
        box-shadow: 4px /10px /20px /0px white;
        cursor: pointer;
        transition: 400ms;
        border: 6px solid black;

    }

    #div-img:hover {
        filter: grayscale(1.5);
        transform: scale(1.05);
    }

    .div-img {
        box-shadow: 4px /10px /20px /0px white;
        cursor: pointer;
        transition: 400ms;
        border: 6px solid black;

    }

    .div-img:hover {
        filter: grayscale(0.5);
        transform: scale(1.03);
    }

    .img-responsive {
        border: 6px solid black;
    }

    .demo {
        background: #3d3d3d;
    }

    .testimonial {
        padding: 35px 50px;
        margin: 0 20px 30px;
        border-radius: 0 70px 0 70px;
        border: 5px solid #ffc33c;
        border-left: none;
        border-right: none;
        text-align: center;
    }

    .testimonial .pic {
        display: inline-block;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .testimonial .pic img {
        width: 100%;
        height: auto;
    }

    .testimonial .title {
        display: block;
        margin: 0 0 7px 0;
        font-size: 20px;
        font-weight: 600;
        color: #ffc33c;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .testimonial .post {
        display: block;
        font-size: 15px;
        color: #fff;
        text-transform: capitalize;
        margin-bottom: 20px;
    }

    .testimonial .description {
        font-size: 16px;
        color: #fff;
        line-height: 30px;
    }

    .owl-theme .owl-controls {
        margin-top: 0;
    }

    .owl-theme .owl-controls .owl-page span {
        background: #fff;
        opacity: 0.8;
        transition: all 0.3s ease 0s;
    }

    .owl-theme .owl-controls .owl-page.active span {
        background: #ffc33c;
    }
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="content"> <!-- Content -->
    <div class="page-title" style="background:url(images/jenny.png); background-size: cover;">
        <div class="container">
            <div class="page-title-inner">
                <h3 style="margin-left: -30px;">About</h3>
                <div class="breadcumb" style="margin-left: -30px;"> <a href="index.php">Home</a><span> /
                    </span><span>About</span></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-8 blog-content detail">
                    <div class="row">
                        <div class="col-md-12 blog-block">
                            <div class="blog-image">
                                <img src="images/jenny1.png" alt="" class="img-responsive" id="div-img">
                            </div>
                            <h3 class="blog-post-title">Jenny Cosmetics & Jewellery</h3>
                            <div class="blog-meta">July 28, 2014<span>|</span>Online Shopping Store</div>
                            <p>
                                A jenny jewellery store (Pakistan: Online store) is a retail business establishment,
                                that specializes in selling (and also buying) jewellery and cosmetics. Jewellery stores
                                provide many services such as repairs, remodeling, restoring, designing and
                                manufacturing pieces.
                            </p>
                            <p>
                                We love transforming unworn jewellery. Sometimes a simple clean, solder, resize or
                                restring is all that is required. Alternatively we are here to guide you through the
                                process of making your heirlooms wearable again. We like to call them Future Heirlooms.
                            </p>
                            <p>
                                We opened the shop in 2014. We wanted to transform the usual associations with High
                                Street Jeweller’s by introducing modern jewellery ranges and tactile jewellery shopping.
                                I want my customers to enjoy shopping for gifts and accessories by being able to touch
                                and try jewellery and personalise with engraving. If we can’t source the perfect item we
                                will happily make it. The shop is every jewellery & Cosmetics lover's dream with
                                something for all ages and styles.
                            </p>
                            <p>
                                A jenny's store, beauty supply store or cosmetics store is a specialty retailer that
                                sells cosmetics, products and/or beauty tools. </p>

                            <blockquote>
                                We love it where possible if you can visit us in person. Even better, you can order
                                online and click and collect your order in-store.
                                If you live too far away... we understand – order online!
                            </blockquote>

                            <p>
                                We believe in upcycling jewellery & cosmetics whereever possible and keep our carbon
                                footprint low using Jenny's in town for casting and stone setting. We source Single Mine
                                origon gold whereever possible. We Give back to local and national charities as often as
                                possible. We have one earth and we want to look after it.
                            </p>








                            <div class="row">


                            </div>

                            <h3 class="sub-title author">About Author</h3>
                            <div class="author-block">
                                <div class="row">

                                    <div class="col-md-9">
                                        <div class="author-name">
                                            <h3>
                                                Jenny
                                            </h3>
                                            <div class="author-date">
                                                July 28, 2014
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>

                                        <p>She started buisness on July 28, 2014...Makeup dates all the way back to 6000
                                            BCE, starting with the Egyptians. They created it as they believed makeup
                                            was next to godliness and that it appealed to the Gods; both men and women
                                            of all social classes wore makeup.</p>

                                    </div>
                                </div>
                            </div>

                            <h3 class="sub-title comment">Our Team</h3>
                            <div id="comment-sec">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/talha.png" alt="" height="130px" width="120px"
                                                class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Muhammad Talha <span>Intermediate </span></h4>
                                        <p>Consectetur adipiscing elit Integer feugiat dolor nibh Cum sociis natoque
                                            penatibus et magnis dis parturient montes nascetur ridiculus mus.</p>
                                        <a href="" class="btn btn-purple">View Profile</a>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/team1.webp" alt="" height="130px" width="120px"
                                                class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Tayyaba Muslim <span>Intermediate </span></h4>
                                        <p>Consectetur adipiscing elit Integer feugiat dolor nibh Cum sociis natoque
                                            penatibus et magnis dis parturient montes nascetur ridiculus mus.</p>
                                        <a href="" class="btn btn-purple">View Profile</a>
                                        <div class="clearfix"></div>

                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/team1.webp" alt="" height="130px" width="120px"
                                                class="media-object">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Sadia Bader <span>Intermediate </span></h4>
                                        <p>Consectetur adipiscing elit Integer feugiat dolor nibh Cum sociis natoque
                                            penatibus et magnis dis parturient montes nascetur ridiculus mus.</p>
                                        <a href="" class="btn btn-purple">View Profile</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-inner">
                        <div class="search-widget">
                            <h4>Search</h4>
                            <form class="d-flex" role="search" style="margin-bottom:30px;padding:20px">
                                <input type="text" id="hospital-search" style="padding:25px" class="form-control me-2"
                                    placeholder="Search product">
                                <div id="suggestions-container"></div>
                            </form>

                        </div>
                        <?php
                        if (isset($_SESSION['userid'])) {
                            $userid = $_SESSION['userid'];
                        } else {
                            $userid = '';
                        }
                        $productsfetch = "SELECT * from addproduct";
                        $runquery = mysqli_query($connection, $productsfetch);
                        if (mysqli_num_rows($runquery) > 0) {
                            $row = mysqli_fetch_assoc($runquery);
                        }
                        ?>
                        <div id="hospital-details" style="display: none;"></div>
                    </div>
                    <div class="side-recent">
                        <h4>Recent Products</h4>

                        <div class="side-recent-ct" id="result">
                            <br><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href=""><img src="images/c18.jpg" height="100px" width="100px" alt=""
                                            class="div-img"></a>
                                </div>
                                <div class="col-md-8">
                                    <h5><a href="">Bangles</a></h5>
                                    <div class="meta"><a href="">$30</a> April 11, 2023</div>
                                    <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                </div>
                            </div>
                        </div>
                        <div class="side-recent-ct">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href=""><img src="images/cos1.webp" height="100px" width="100px" alt=""
                                            class="div-img"></a>
                                </div>
                                <div class="col-md-8">
                                    <h5><a href="">Set Of Lipstick</a></h5>
                                    <div class="meta"><a href="">$10</a> May 11, 2023</div>
                                    <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                </div>
                            </div>
                        </div>
                        <div class="side-recent-ct">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href=""><img src="images/j2.webp" height="100px" width="100px" alt=""
                                            class="div-img"></a>
                                </div>
                                <div class="col-md-8">
                                    <h5><a href="">Multi Stone Rings</a></h5>
                                    <div class="meta"><a href="">$15</a> july 11, 2023</div>
                                    <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="blog-side-tag">
                        <h4>About Tags</h4>
                        <a href="products.php">Bangles</a>
                        <a href="products.php">Earings</a>
                        <a href="products.php">Lipsticks</a>
                        <a href="products.php">Face Powder</a>
                        <a href="products.php">Eyeshadow</a>
                        <a href="products.php">Rings</a>
                        <a href="products.php">Beauty kit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div> <!-- Content -->

<div class="demo">
    <div class="container">
        <div class="row">
            <?php
            $fetch = "SELECT * FROM `feedback-form`";
            $query = mysqli_query($connection, $fetch);
            if (mysqli_num_rows($query) > 0) {
                ?>
                <div class="col-md-12">
                    <h1 class="text-center" style="color:white;">Testimonial</h1>
                    <div id="testimonial-slider" class="owl-carousel">
                        <?php
                        while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                            <div class="testimonial">
                                <h3 class="title">
                                    <?php echo $row['first_name']; ?>
                                    <?php echo $row['last_name']; ?>
                                    <br>
                                    <?php echo $row['phone_number']; ?>
                                </h3>
                                <span class="post">
                                    <?php echo $row['email']; ?>
                                </span>
                                <p class="description">

                                    <?php echo $row['message']; ?>

                                </p>
                            </div>

                            <?php
                        }
            }

            ?>
                </div>
            </div>
        </div>
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
                url: 'fetch_hospital_details2.php',
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


    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true,
            transitionStyle: "backSlide",
            autoPlay: true
        });
    });
</script>
<br>
<br>
<?php
include('includes/footer.php')
    ?>
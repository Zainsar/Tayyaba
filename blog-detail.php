<?php
include('includes/navbar.php');
include('includes/config.php');
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    $query = "INSERT INTO `feedback-form`(`first_name`,`last_name`,`email`,`phone_number`,`message`)
    VALUES ('$first_name','$last_name','$email','$phone_number','$message')";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "failed";
    }
}

?>
<html>
<style>
    #img {
        box-shadow: 4px /10px /20px /0px black;
        cursor: pointer;
        transition: 400ms;
        border: 6px solid black;

    }

    #img:hover {
        filter: grayscale(1.5);
        transform: scale(1.05);
    }

    .div-img {
        box-shadow: 4px /10px /20px /0px black;
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
</style>

</html>

<div id="content"> <!-- Content -->
    <div class="page-title" style="background:url(images/about.jpg); background-size: cover;">
        <div class="container">
            <div class="page-title-inner">
                <h3 style="color:black;">Blog</h3>
                <div class="breadcumb"> <a href="">Home</a><span> / </span><span>Blog</span></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-8 blog-content">
                    <div class="row">
                        <div class="col-md-12 blog-block">
                            <div class="inner">
                                <div class="blog-image">
                                    <i class="fa fa-image"></i>
                                    <a href=""><img src="images/about2.jpg" alt="" class="img-responsive" id="img"></a>
                                </div>
                                <h3 class="blog-post-title"><a href="">New Stylish Earing & Ring</a></h3>
                                <div class="blog-meta">september 28, 2023<span>|</span><a href="">100k</a></div>
                                <p>
                                    Morbi ultricies porttitor varius. In hac habitasse platea dictumst. Vestibulum
                                    convallis blandit augue quis sagittis. Quisque semper velit dui, sit amet cursus
                                    arcu interdum sit amet. Maecenas augue dui, suscipit non fringilla sed, congue vitae
                                    purus. Aenean non aliquam mi.
                                </p>

                            </div>
                        </div>

                        <div class="col-md-12 blog-block">
                            <div class="inner">
                                <div class="blog-image">
                                    <i class="fa fa-image"></i>
                                    <a href=""><img src="images/about5.jpg" alt="" class="img-responsive" id="img"></a>
                                </div>
                                <h3 class="blog-post-title"><a href="">New Eye-Lense</a></h3>
                                <div class="blog-meta">October 20, 2023<span>|</span><a href="">95k</a></div>
                                <p>
                                    Morbi ultricies porttitor varius. In hac habitasse platea dictumst. Vestibulum
                                    convallis blandit augue quis sagittis. Quisque semper velit dui, sit amet cursus
                                    arcu interdum sit amet. Maecenas augue dui, suscipit non fringilla sed, congue vitae
                                    purus. Aenean non aliquam mi.
                                </p>

                            </div>
                        </div>

                        <div class="col-md-12 blog-block">
                            <div class="inner">
                                <div class="blog-image">
                                    <i class="fa fa-video-camera"></i>
                                    <a href=""><img src="images/about4.jpg" alt="" class="img-responsive" id="img"></a>
                                </div>
                                <h3 class="blog-post-title"><a href="">Curl Hair</a></h3>
                                <div class="blog-meta">Octber 27, 2023<span>|</span><a href="">23k</a></div>
                                <p>
                                    Morbi ultricies porttitor varius. In hac habitasse platea dictumst. Vestibulum
                                    convallis blandit augue quis sagittis. Quisque semper velit dui, sit amet cursus
                                    arcu interdum sit amet. Maecenas augue dui, suscipit non fringilla sed, congue vitae
                                    purus. Aenean non aliquam mi.
                                </p>

                            </div>
                        </div>


                        <div class="col-md-12 blog-block">
                            <div class="inner">
                                <div class="blog-image">
                                    <i class="fa fa-camera"></i>
                                    <a href=""><img src="images/about3.jpg" alt="" class="img-responsive" id="img"></a>
                                </div>
                                <h3 class="blog-post-title"><a href="">Diamond Earing & Ring</a></h3>
                                <div class="blog-meta">November 2, 2023<span>|</span><a href="">98k</a></div>
                                <p>
                                    Morbi ultricies porttitor varius. In hac habitasse platea dictumst. Vestibulum
                                    convallis blandit augue quis sagittis. Quisque semper velit dui, sit amet cursus
                                    arcu interdum sit amet. Maecenas augue dui, suscipit non fringilla sed, congue vitae
                                    purus. Aenean non aliquam mi.
                                </p>

                            </div>
                        </div>

                    </div>

                    <nav>
                        <div class="pag-center">
                            <ul class="pagination believe-pag">

                                <li class="active"><span>1</span></li>
                                <li><a href="cosmetics.php">2</a></li>
                                <li><a href="jewellery.php">3</a></li>
                                <li><a href="about.php">4</a></li>


                            </ul>

                        </div>
                    </nav>

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
                        <div class="side-last">
                            <h4>Latest Post</h4>
                            <div class="side-last-ct" id="result">
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href=""> <img src="images/about5.jpg" height="100px" width="100px" alt=""
                                                class="div-img"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                        <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
                                        <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="side-last-ct">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href=""><img src="images/about4.jpg" height="100px" width="100px" alt=""
                                                class="div-img"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                        <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
                                        <p>Morbi ultricies porttitor varius. In hac habitasse platea de...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="side-last-ct">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href=""> <img src="images/about2.jpg" height="100px" width="100px" alt=""
                                                class="div-img"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><a href="">Lorem ipsum dolor sit amsdf</a></h5>
                                        <div class="meta"><a href="">23 Comments</a> April 11, 2014</div>
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
                        <br>
                        <br>
                        <h3 class="sub-title comment">Feedback</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <form class="comment-form">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id" id="id" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">First Name*</label>
                                        <input type="text" class="form-control" name="first_name" id="name"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Last Name*</label>
                                        <input type="text" class="form-control" name="last_name" id="name"
                                            placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-mail*</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="number">Phone-number*</label>
                                        <input type="number" class="form-control" name="phone_number" id="subject"
                                            placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message*</label>
                                        <textarea class="form-control" name="message" id="message"></textarea>
                                    </div>

                                    <button type="submit" value="submit" name="submit"
                                        class="btn btn-blue">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- Content -->

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

</script>
<?php
include('includes/footer.php')
    ?>
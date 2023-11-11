<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jenny Cosmetics & Jewellery Shop</title>

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">


    <!-- Slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">

    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* Style for the dropdown menu */
        .dropdown-menu {
            background-color: #fff;
            /* Change the background color */
            border: 1px solid #ccc;
            /* Add a border */
            border-radius: 0;
            /* Remove border-radius if you want it completely squared */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Add a subtle box shadow */
        }

        /* Style for the dropdown items */
        .dropdown-item {
            color: #333;
            /* Change text color */
            padding: 10px 20px;
            /* Add padding to the items */
            text-decoration: none;
            /* Remove underlines from links */
            display: block;
            /* Make the items a block element */
            transition: background-color 0.3s;
            /* Add a smooth transition for background color changes */
        }

        /* Hover effect for dropdown items */
        .dropdown-item:hover {
            background-color: #f0f0f0;
            /* Change the background color on hover */
        }
    </style>
</head>

<body bgcolor="white">

    <div id="wrapper" class="homepage-1"> <!-- wrapper -->
        <div id="header" style=" width:100%; position:fixed; z-index:1; background-color: white; margin:0 auto 0 auto;">
            <!-- header -->
            <div class="top"> <!-- top -->
                <div class="container">
                    <ul class="top-support">
                        <li><i class="fa fa-phone-square"></i><span>(+800) 123 456 7890</span></li>
                        <li><a href=""><i class="fa fa-envelope-square"></i><span>info@bootstrapmart.com</span></a></li>
                    </ul>
                    <div class="top-offers">
                        <div class="alert alert-warning alert-dismissible fade in offers" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                            Free Shipping <a href="">on All Orders Over</a> $75!
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="top-offers show-mobile">
                        <div class="alert alert-warning alert-dismissible fade in offers" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                            Free Shipping <a href="">on All Orders Over</a> $75!
                        </div>
                    </div>
                </div>
            </div> <!-- top -->

            <div id="believe-nav"> <!-- Nav -->
                <div class="container">
                    <div class="min-marg">
                        <nav class="navbar navbar-default">
                            <!-- <div class="container-fluid"> -->
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php" style="margin-top:-20px;"><img
                                        src="images/lo1.jpg" alt=""></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <?php
                                    if (!isset($_SESSION["useremail"])) {

                                        ?>
                                        <li class="active"><a href="index.php">Home <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="blog-detail.php">Blog </a></li>
                                        <li><a href="products.php">products</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        <li><a href="login.php">Login</a></li>

                                        <?php
                                    } else {
                                        ?>
                                        <li class="active"><a href="index.php">Home <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="blog-detail.php">Blog </a></li>
                                        <li><a href="products.php">products</a></li>
                                        <li><a href="vieworder.php">View Bill</a></li>
                                        <?php
                                        require("config.php");
                                        $current_user_id = $_SESSION["userid"];
                                        $count_cart = mysqli_query($connection, "SELECT count(cartid) as `total` from `cart` where `userid` = '$current_user_id' AND `cartstatus` = 1");
                                        if ($count_cart) {
                                            if (mysqli_num_rows($count_cart) > 0) {
                                                $row = mysqli_fetch_assoc($count_cart);
                                            }
                                        }
                                        ?>
                                        <li><a href="cart.php"><img src="images/bag.png" alt="bag"><span>
                                                    <?php echo $row['total'] ?>
                                                </span></a></li>
                                        <?php
                                        require("config.php");
                                        $username = $_SESSION["useremail"];
                                        $query = "SELECT * FROM `user-register` WHERE `email` = '$username'";
                                        $result = mysqli_query($connection, $query);
                                        $result1 = mysqli_fetch_assoc($result);
                                        ?>
                                        <div class="navbar-nav align-items-center ms-auto" style="margin-left: 10px;">
                                            <div class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                    <span class=" d-lg-inline-flex"
                                                        style="color: black; font-style: italic; font-weight: 700; font-size: 20px;">
                                                        <?php echo $result1['username'] ?>
                                                    </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0"
                                                    style="margin-top: 4px; z-index: 1;">
                                                    <a href="myprofile.php" class="dropdown-item">My Profile</a>
                                                    <br>
                                                    <a href="updatepassword.php" class="dropdown-item">Update Password</a>
                                                    <br>
                                                    <a href="logout.php" class="dropdown-item">Log Out</a>
                                                </div>
                                            </div>
                                        </div>



                                        <?php
                                    }
                                    ?>
                                </ul>

                                <ul class="nav navbar-nav navbar-right">


                                    <li id="open-srch-form-mod">
                                        <div>
                                            <form class="side-search">
                                                <div class="input-group">
                                                    <input type="text" id="input" class="form-control search-wid"
                                                        placeholder="Search Here" aria-describedby="basic-addon1"
                                                        onkeyup="search()">
                                                    <!-- <a href="" type="btn" class="input-group-addon btn-side-serach" id="inputbtn"><i class="fa fa-search"></i></a> -->
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>

                            </div><!-- /.navbar-collapse -->
                            <!--</div> -->

                        </nav>
                    </div>
                    <div class="srch-form">
                        <form class="side-search">
                            <div class="input-group">
                                <input type="text" class="form-control search-wid" placeholder="Search Here"
                                    aria-describedby="basic-addon2">
                                <a href="" class="input-group-addon btn-side-serach" id="basic-addon2"><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- Nav -->

            <!--<div id="cat-nav">
                  <div class="container">
                      <div class="wrap-cat">
                          <a href="#" id="to-open-cat" class="btn btn-default btn-sm">show categories</a>
                          <ul class="this-cat clearfix">
                              <li class="active"><a href="">ELECTRONICS <i class="fa fa-angle-down"></i></a></li>
                              <li><a href="">MEN <i class="fa fa-angle-down"></i></a></li>
                              <li><a href="">WOMEN <i class="fa fa-angle-down"></i></a></li>
                              <li><a href="">BABY & KIDS <i class="fa fa-angle-down"></i></a></li>
                              <li><a href="">BOOKS & MEDIA <i class="fa fa-angle-down"></i></a></li>
                              <li><a href="">HOME & KITCHEN <i class="fa fa-angle-down"></i></a></li>
                              <li><a href="">MORE STORES <i class="fa fa-angle-down"></i></a></li>
                              <li><a href="">OFFERS ZONE <i class="fa fa-angle-down"></i></a></li>
                              <li class="cat-img-off"><img src="images/offers.png" alt="off"></li>
                          </ul>
                      </div>
                  </div>
              </div>-->

            <div id="cat-nav">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- <div class="container-fluid"> -->
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#cat-nav-mega">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="cat-nav-mega">
                            <ul class="nav navbar-nav">


                                <li><a href="cosmetics.php">Cosmetic </a></li>
                                <li><a href="jewellery.php">Jewellery </a></li>
                                <li><a href="index.php">Offers zone </a></li>
                                <li class="cat-img-off"><img src="images/offers.png" alt="off"></li>
                            </ul>

                        </div><!-- /.navbar-collapse -->
                        <!--</div> -->
                    </nav>
                </div>
            </div>
        </div> <!-- header -->
    </div> <!-- header -->

    <script src="js/script.js"></script>
<?php
require('../includes/config.php');
require('navbar.php');
require('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Content Start -->
        <div class="content">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="page-title-inner">
                                <h3 class="mb-4 text-primary">Update Delivery Status</h3>
                                <div class="breadcumb"> <a href="index.php">Home</a><span> /
                                    </span><span>Update Status</span></div>
                                <br>
                                <?php
                                $get = $_GET['cartid'];
                                $fetch = "SELECT * FROM `cart` WHERE `cartid` = '$get' ";
                                $conn = mysqli_query($connection, $fetch);
                                if (mysqli_num_rows($conn) > 0) {
                                    while ($row = mysqli_fetch_assoc($conn)) {
                                        ?>
                                        <form action="backend.php" method="post" class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                                <input type="hidden" name="cartid" class="form-control"
                                                    value="<?php echo $row['cartid'] ?>" aria-describedby="emailHelp">
                                                <input type="text" name="status" class="form-control"
                                                    value="<?php echo $row['updatestatus'] ?>" aria-describedby="emailHelp">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require('footer.php');
            ?>
        </div>
    </div>
</body>

</html>
<?php
require('../includes/config.php');
require('navbar.php');

$cart_data = "SELECT * from cart AS c INNER JOIN `user-register` AS user ON c.userid = user.id INNER JOIN addproduct AS p ON p.pid = c.proid";
$con_view = mysqli_query($connection, $cart_data);

if (mysqli_num_rows($con_view) > 0) {
    ?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>DarkPan - Bootstrap 5 Admin Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Data Table -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


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

                <!-- Table Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <div class="page-title-inner">
                                    <h3 class="mb-4 text-primary">Incoming Orders</h3>
                                    <div class="breadcumb"> <a href="index.php">Home</a><span> /
                                        </span><span>Products</span></div>
                                    <br>
                                    <div class="clearfix"></div>
                                    <div class="table-responsive">
                                        <table id="example"
                                            class="display nowrap table table-bordered text-white text-center table-hover">
                                            <thead class="text-secondary bg-white">
                                                <tr>
                                                    <th scope="col">CardID</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Qunatity</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Cartstatus</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($pro_up = mysqli_fetch_assoc($con_view)) {
                                                    ?>

                                                    <tr>

                                                        <td>
                                                            <?php echo $pro_up['cartid']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $pro_up['ptitle']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $pro_up['pdescription']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $pro_up['pcategory']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $pro_up['pprice']; ?>
                                                        </td>
                                                        <td>
                                                            <img src="<?php echo '../images/' . $pro_up['pimage']; ?>" alt=""
                                                                height="50px" width="70px">
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($pro_up['cartstatus'] == '1') {
                                                                echo "Pending";
                                                            } else {
                                                                echo "Approve";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="approve.php?cartid=<?php echo $pro_up['cartid']; ?>"
                                                                class="btn btn-success">Approve</a>
                                                            <a href="pending.php?cartid=<?php echo $pro_up['cartid']; ?>"
                                                                class="btn btn-danger">Pending</a>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                }
}

?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!-- Table End -->


            <!-- Footer Start -->
            <!-- Footer End -->
            <?php
            include('footer.php');
            ?>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</body>

</html>
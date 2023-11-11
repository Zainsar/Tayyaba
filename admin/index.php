<?php

include('../includes/config.php');
include('navbar.php');

$db_admin = "SELECT * FROM `admin_reg`";
$fetch = mysqli_query($connection,$db_admin);
if(mysqli_num_rows($fetch) > 0){
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jenny's Cosmetics </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
             
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <?php
                                $fetch4 = "SELECT * FROM `user-register`";
                                $conn4 = mysqli_query($connection,$fetch4);
                                $row4 = mysqli_num_rows($conn4);
                                ?>
                                <p class="mb-2">Total User</p>
                                <h6 class="mb-0"><?php echo $row4 ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
                                $fetch1 = "SELECT * FROM `addproduct` WHERE `pcategory` = 1";
                                $conn1 = mysqli_query($connection,$fetch1);
                                $row1 = mysqli_num_rows($conn1);
                                ?>
                                <p class="mb-2">Cosmetic Products</p>
                                <h6 class="mb-0"><?php echo $row1 ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
                                $fetch2 = "SELECT * FROM `addproduct` WHERE `pcategory` = 2";
                                $conn2 = mysqli_query($connection,$fetch2);
                                $row2 = mysqli_num_rows($conn2);
                                ?>
                                <p class="mb-2">Jewelery Product</p>
                                <h6 class="mb-0"><?php echo $row2 ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
                                $fetch3 = "SELECT * FROM `cart` WHERE `cartstatus` = 0";
                                $conn3 = mysqli_query($connection,$fetch3);
                                $row3 = mysqli_num_rows($conn3);
                                ?>
                                <p class="mb-2">Total Orders</p>
                                <h6 class="mb-0"><?php echo $row3 ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h3 class="text-primary">Total registered </h3>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap table text-start align-middle table-bordered table-hover mb-0" href="regiter.php">
                            <thead >
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">Admin IDs</th>
                                    <th scope="col">Admin Names</th>
                                    <th scope="col">Admin Emails</th>
                                    <th scope="col">Admin Phone</th>
                                    <!-- <th scope="col">Status</th> -->
                                    <!-- <th scope="col">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                             <?php
                             while($row = mysqli_fetch_assoc($fetch)){
                             ?>    
                             
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td> <?php echo $row['name']?></td>
                                    <td><?php echo $row['email']?> </td>
                                    <td><?php echo $row['phone']?> </td>
                                   
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
             
            <!-- Recent Sales End -->


             


            <!-- Footer Start -->
            <?php
            include('footer.php');
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


</body>

</html>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script> window.location.href='signin.php' </script>";
}
require("../includes/config.php");
$username = $_SESSION["admin"];
$query = "SELECT * FROM `admin_reg` WHERE `email` = '$username'";
$result = mysqli_query($connection, $query);
$result1 = mysqli_fetch_assoc($result);

?>
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>J's Cosmetics </h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?php echo '../includes/imgs/' . $result1['images'] ?>" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">
                    <?php echo $result1['name'] ?>
                </h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Display User</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.php" class="dropdown-item">Sign In</a>
                    <a href="register.php" class="dropdown-item">Register</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Category</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="addcategory.php" class="dropdown-item">Add Category</a>
                    <a href="viewcategory.php" class="dropdown-item">View Category</a>
                    <a href="trashcatdetails.php" class="dropdown-item">View Trash Category</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Products</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="addproduct.php" class="dropdown-item">Add product</a>
                    <a href="viewproduct.php" class="dropdown-item">View product</a>
                    <a href="trashprodetails.php" class="dropdown-item">View Trash Products</a>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="far fa-file-alt me-2"></i>Orders</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="incomingorder.php" class="dropdown-item">Incoming orders</a>
                        <a href="order.php" class="dropdown-item">View orders</a>
                    </div>
                </div>

            </div>
    </nav>
</div>

<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-lg mt-3" style="margin-left: 250px;">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="<?php echo '../includes/imgs/' . $result1['images'] ?>" alt="" height="40px" width="40px"
                    style="border-radius: 200px; border:2px solid black ;">
                <span class=" d-lg-inline-flex">
                    <?php echo $result1['name'] ?>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="myprofile.php" class="dropdown-item" style="color: red;">My Profile</a>
                <a href="updatepassword.php" class="dropdown-item" style="color: red;">Update Password</a>
                <a href="logout.php" class="dropdown-item" style="color: red;">Log Out</a>
            </div>
        </div>
    </div>
</nav>
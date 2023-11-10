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
                <img src="<?php echo '../includes/img/' . $result1['images'] ?>" alt="" height="40px" width="40px"
                    style="border-radius: 200px; border:2px solid black ;">
                <span class=" d-lg-inline-flex">
                    <?php echo $result1['name'] ?>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="myprofile.php" class="dropdown-item" style="color: red;">My Profile</a>
                <a href="#" class="dropdown-item" style="color: red;">Settings</a>
                <a href="logout.php" class="dropdown-item" style="color: red;">Log Out</a>
            </div>
        </div>
    </div>
</nav>
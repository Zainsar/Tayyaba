<?php
require('../includes/config.php');
require('navbar.php');
?>
<?php
// $get = $_SESSION['admin'];
// $conn = mysqli_query($connection, $fetch);
// if (mysqli_num_rows($conn) > 0) {
//     while ($row = mysqli_fetch_assoc($conn)) {
if (!isset($_SESSION["admin"])) {
    echo '<script> window.location.href="signin.php"</script>';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];
    $username = $_SESSION["admin"];


    $query = "SELECT * FROM `admin_reg` WHERE `email` = '$username'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $dbPassword = $row["password"];

        if (password_verify($currentPassword, $dbPassword)) {
            if ($newPassword == $confirmPassword) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE `admin_reg` SET `password` = '$hashedPassword' WHERE `email` = '$username'";
                if (mysqli_query($connection, $updateQuery) === TRUE) {
                    echo ' <script>
                                                        alert("Password Updated Succesfully");
                                                        </script>';

                } else {
                    echo ' <script>
                                                        alert("Error Updating Password")
                                                        </script>';
                }
            } else {
                echo ' <script>
                                                    alert("New Password And Confirm Password Dosenot Match");
                                                        </script>';
            }
        } else {
            echo ' <script>
                                                alert("Current Password Is Incorrect")
                                                        </script>';
        }
    } else {
        echo ' <script>
                                                        alert("User Not Found");
                                                        </script>';
    }
}
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
                                <h3 class="mb-4 text-primary">Update Password</h3>
                                <div class="breadcumb"> <a href="index.php">Home</a><span> /
                                    </span><span>Update Password</span></div>
                                <br>
                                <form action="updatepassword.php" method="post" class="form-group">
                                    <div class="mb-3">
                                        <label class="form-label">Current Password</label>
                                        <input type="password" name="current_password" class="form-control"
                                            required="true">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">New Password</label>
                                        <input type="password" name="new_password" class="form-control" required="true">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control"
                                            required="true">
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" name="submit"
                                        id="submit">
                                </form>
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
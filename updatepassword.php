<?php
require('includes/config.php');
require('includes/navbar.php');
?>
<?php
if (!isset($_SESSION["useremail"])) {
    echo '<script> window.location.href="login.php"</script>';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];
    $username = $_SESSION["useremail"];


    $query = "SELECT * FROM `user-register` WHERE `email` = '$username'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $dbPassword = $row["password"];

        if (password_verify($currentPassword, $dbPassword)) {
            if ($newPassword == $confirmPassword) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE `user-register` SET `password` = '$hashedPassword' WHERE `email` = '$username'";
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
<div class="content" style="background:url(images/bg1234.jpg); background-size: cover; height:900px; color:white;">
    <div class="container">
        <div class="ct-offers">
            <div class="ct-offers-title">Change Password</div>

        </div>
    </div>


    <div class="container" style="margin-top: 150px; height:500px; background-color:black; opacity: 90%;">
        <div class="col-md-12" style="margin-top: 20px;">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="page-title-inner">
                    <h3 class="mb-4 text-primary">Update Password</h3>
                    <div class="breadcumb"> <a href="index.php">Home</a><span> /
                        </span><span>Update Password</span></div>
                    <br>
                    <form action="updatepassword.php" method="post" class="form-group" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label class="form-label">Current Password</label>
                            <input type="password" name="current_password" class="form-control" required="true">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" name="new_password" id="password" class="form-control">
                            <span id="passworderror" class="text-danger font-weight-bold"></span>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="Cpassword" class="form-control">
                            <span id="cpassworderror" class="text-danger font-weight-bold"></span>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    function validateForm() {
        var password = document.getElementById('password').value;
        var cpassword = document.getElementById('Cpassword').value;

        // Regular expressions for validation
        var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*].{8,16}$/;
        var cpasswordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*].{8,16}$/;

        if (passwordcheck.test(password)) {
            document.getElementById('passworderror').innerHTML = " ";
        } else {
            document.getElementById('passworderror').innerHTML = "Password must be at least 9,16 characters long. may include numbers and Special Characters ";
            return false;
        }
        if (cpasswordcheck.test(cpassword)) {
            document.getElementById('cpassworderror').innerHTML = " ";
        } else {
            document.getElementById('cpassworderror').innerHTML = "Password must be at least 9,16 characters long. may include numbers and Special Characters ";
            return false;
        }
    }
</script>
<?php
require("includes/footer.php");
?>
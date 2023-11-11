<?php
require("includes/config.php");

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
// print_r($_POST);

// print_r($_FILES);
// die();
$update = "UPDATE `user-register` SET `username` = '$name' , `email` = '$email' WHERE `id` = '$id'";
$conn = mysqli_query($connection, $update);
if (!$conn) {
    echo "<script> alert('Query Failed') </script>";
} else {
    echo "<script> alert('Profile Update Successfully') </script>";
    echo "<script> window.location.href='myprofile.php' </script>";
}
?>
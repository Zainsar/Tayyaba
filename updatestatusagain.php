<?php
require("includes/config.php");

$get_id = $_GET['cartid'];

$update = "UPDATE `cart` SET `cartstatus` = 0 WHERE `cartid` = '$get_id' ";
$conn = mysqli_query($connection, $update);
if (!$conn) {
    echo "<script> alert('Query Failed') </script>";
} else {
    echo "<script> window.location.href='checkout.php' </script>";
}


?>
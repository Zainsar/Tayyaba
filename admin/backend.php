<?php
require("../includes/config.php");

$cartid = $_POST["cartid"];
$status = $_POST["status"];

$update = "UPDATE `cart` SET `updatestatus` = '$status' WHERE `cartid` = '$cartid'";
$conn = mysqli_query($connection, $update);
if (!$conn) {
    echo "<script> alert('Query Failed') </script>";
} else {
    echo "<script> alert('Status Update Successfully') </script>";
    echo "<script> window.location.href='order.php' </script>";
}
?>
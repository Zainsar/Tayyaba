<?php
require '../Includes/config.php';

$user_id = $_GET['cartid'];
$user_name = 1;
$update = "UPDATE `cart` SET `cartstatus` ='$user_name' WHERE `cartid` = '$user_id' ";
$res = mysqli_query($connection, $update);
if (!$res) {
    die("Query failed");
} else {
    echo '<script> alert("Your Pending successful") </script>';
    echo '<script> window.location.href="incomingorder.php" </script>';
}
?>
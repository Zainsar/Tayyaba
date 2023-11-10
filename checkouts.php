<?php
include("includes/config.php");

if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $country = $_POST["country"];
    $address = $_POST["address"];
    $apartment = $_POST["appartment"];
    $city = $_POST["city"];
    $postal = $_POST["postal"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $insert = "INSERT INTO `booked` (`First Name`, `Last Name`, `Country`,`address`, `Appartment`, `city`, `postal`, `phone`, `email`) VALUES ('$firstname', '$lastname', '$country','$address', '$apartment', '$city','$postal', '$phone', '$email')
";
    mysqli_query($connection, $insert);
    if (!$insert) {
        echo "<script> alert('Querry Failed') </script>";
    } else {
        echo "<script> alert('Order Place Succesfully') </script>";
        echo "<script> window.location.href='vieworder.php' </script>";
    }
}
?>
<?php
require 'vendor/autoload.php'; // Path to your autoload.php file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();
if (!isset($_SESSION['useremail'])) {
    echo "<script> alert('please login first') </script>";
    echo "<script> window.location.href='register.php' </script>";
} else {


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the email from the form
        $email = $_POST['email'];

        // Validate email (you can add more validation if needed)
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format");
        }

        // Send email
        try {
            $mail = new PHPMailer(true);

            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'zainsarfraz745@gmail.com'; // Sender's email address
            $mail->Password = 'lkqe avoe gwnx xdcr';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
            $mail->Port = 587; // Port for TLS

            // Recipients
            $mail->setFrom('zainsarfraz745@gmail.com', 'Zain');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Subscription Confirmation';
            $mail->Body = 'Your subscription has been successfully processed.';

            $mail->send();
            echo "<script> alert('Message has been sent to email') </script>";
            echo "<script> window.location.href='index.php' </script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>
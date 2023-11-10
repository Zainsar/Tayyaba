<html>
<style>
    .foot {
        border: 3px solid #2b2a2f;
        box-sizing: border-box;
        transition: all 0.2s ease-in;
    }

    .foot:hover {
        transform: scale(0.9) rotate(0.1deg);
        box-shadow: 0px 0px 20px black;
    }
</style>

</html>


<div id="footer" class="foot"><!-- Footer -->
    <div class="footer-widget" style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="text-widget">
                        <div class="wid-title">
                            <center> Welcome to</center>
                        </div>
                        <img src="images/lo2.jpg" alt="">
                        <p>Online Store Shop <br> BEAUTY sunisa foundation, Biofad, janssen facial kit,
                            Glutathione Injection, Glutathione Cream Sauvage, Glutathione Tablets, Glutathione
                            Soap, Infrared Thermometers, N95 Mask<br><a href="">Lets Start Shopping!</a>
                        </p>
                        <ul class="ft-soc clearfix">
                            <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="quick-links">
                        <div class="wid-title">Quick Links</div>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About US</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="blogdetails.php">blog</a></li>
                            <li><a href="#">help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="term">
                        <div class="wid-title">&nbsp;</div>
                        <p>
                            <a href="#">Tearms & condition</a><br />
                            <a href="#">FAQs</a><br />
                            <a href="#">Privacy Policy</a><br />
                            <a href="#">Legal Desclaimer</a><br />
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="quick-links">
                        <div class="wid-title">My Account</div>

                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Personal Information</a></li>
                            <li><a href="#">Addresses</a></li>
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">track order</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="subscribe">
                        <div class="wid-title">Subscribe for OFFERS & UPDATES</div>
                        <p>
                            Enter your email and we'll send you a coupon
                            with 10% off your next order. Add any text here
                        </p>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                    placeholder="Enter email" required>
                            </div>
                            <button type="submit" class="btn btn-default">Subscribe Now</button>
                        </form>
                        <?php
                        require 'vendor/autoload.php'; // Path to your autoload.php file
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\Exception;


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
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-text">
        <div class="container">
            <p>Copyright 2018. Designed and Developed by <a href="https://bootstrapmart.com/">TST </a> &amp; Distributed
                by <a href="https://themewagon.com/">TST</a></p>
        </div>
    </div>
</div><!-- Footer -->
</div> <!-- wrapper -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/library.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.raty.js"></script>
<script src="js/ui.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.selectbox-0.2.js"></script>
<script src="js/theme-script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
</body>

</html>
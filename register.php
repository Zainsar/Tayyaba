<?php
include('includes/navbar1.php');
include('includes/config.php');

require 'vendor/autoload.php'; // Composer se install kiya hua ho to yeh line add karein
// PHPMailer Integration
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['register'])) {
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $pass = mysqli_real_escape_string($connection, $_POST['password']);

  $password = password_hash($pass, PASSWORD_BCRYPT);

  $email_check = "SELECT *  from `user-register` where email = '$email'";
  $result = mysqli_query($connection, $email_check);
  if (mysqli_num_rows($result) > 0) {
    echo "<script> alert('email already exist'); </script>";
  } else {
    // User ka email address $user_email variable mein store karein
    $user_email = $email;

    // PHPMailer configuration
    $mail = new PHPMailer(true);
    try {
      // Server settings
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com'; // SMTP server
      $mail->SMTPAuth = true;
      $mail->Username = 'zainsarfraz745@gmail.com'; // Sender's email address
      $mail->Password = 'lkqe avoe gwnx xdcr';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
      $mail->Port = 587; // Port for TLS

      // Recipient settings
      $mail->setFrom('zainsarfraz745@gmail.com', 'Zain');
      $mail->addAddress($user_email, $username); // User ka email address

      // Email content
      $mail->isHTML(true);
      $mail->Subject = 'Welcome to Our Website';
      $mail->Body = 'Thank you for registering on our website.';

      $mail->send();
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    $insert_query = "INSERT INTO `user-register` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    $conn_insert = mysqli_query($connection, $insert_query);
    echo "<script> alert('You Are Succesfully Rigester') </script>";
    echo '<script> window.location.href="login.php" </script>';

  }
}
?>
<html>
<style>
  body {
    background-color: #2b2a2f;
    color: white;

  }

  .slid1 #home-slider #zoom1 img {
    -webkit-animation: thing 20s;
    -o-animation: thing 20s;
    animation: thing 20s;
  }

  @keyframes thing {
    from {
      transform: scale(1, 1);

    }

    to {
      transform: scale(1.9, 1.9);
    }
  }
</style>

</html>

<div id="main-slider" class="slid1"> <!-- Slider -->
  <div id="home-slider" class="owl-carousel owl-theme">
    <div class="item" id="zoom1">
      <img src="images/register.jpg" alt="slide-1" class="img-responsive">
      <div class="slider-desc" <div class="container">
        <div class="row slider-text justify-content-center align-items-center">



        </div>



      </div>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div> <!-- Slider -->
<br>
<br>
<br>
<section class="why_section layout_padding">
  <div class="container">

    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="full">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5"
            onsubmit="return validateForm()">
            <div class="row align-items-end">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="Username">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                  <span id="usererror" class="text-danger font-weight-bold"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                  <span id="emailerror" class="text-danger font-weight-bold"></span>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  <span id="passworderror" class="text-danger font-weight-bold"></span>
                </div>

              </div>
              <div class="col-md-12">
                <div class="form-group mt-4">
                  <div class="radio">
                    <button name="register" class="btn btn-primary py-3 px-4">Register</button>
                  </div>
                </div>
              </div>


          </form><!-- END -->

          <script>
            function validateForm() {
              var username = document.getElementById('username').value;
              var email = document.getElementById('email').value;
              var password = document.getElementById('password').value;

              // Regular expressions for validation
              var usercheck = /^[A-Za-z .]{3,15}$/;
              var emailcheck = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
              var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*].{8,16}$/;

              if (usercheck.test(username)) {
                document.getElementById('usererror').innerHTML = " ";
              } else {
                document.getElementById('usererror').innerHTML = " Invalid username. must be at least 3,15 characters long . may include alphabets only. ";
                return false;
              }
              if (emailcheck.test(email)) {
                document.getElementById('emailerror').innerHTML = " ";
              } else {
                document.getElementById('emailerror').innerHTML = " Invalid Email.";
                return false;
              }
              if (passwordcheck.test(password)) {
                document.getElementById('passworderror').innerHTML = " ";
              } else {
                document.getElementById('passworderror').innerHTML = "Password must be at least 9,16 characters long. may include numbers and Special Characters ";
                return false;
              }
            }
          </script>
          <!-- <form action="index.html">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end why section -->

<br>
<br>
<br>
<?php
include('includes/footer.php')
  ?>
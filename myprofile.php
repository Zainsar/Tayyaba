<?php
require("includes/config.php");
require("includes/navbar.php");

$username = $_SESSION["useremail"];
$query = "SELECT * FROM `user-register` WHERE `email` = '$username'";
$result = mysqli_query($connection, $query);
$result1 = mysqli_fetch_assoc($result);
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="content" style="background:url(images/bg1234.jpg); background-size: cover; height:700px; color:white;">
  <div class="container">
    <div class="ct-offers">
      <div class="ct-offers-title" style="margin-left: 20px;">My Profile</div>

    </div>
  </div>


  <div class="container" style="margin-top: 150px; height:300px; background-color:black; opacity: 90%;">
    <div class="col-md-12">
      <div class="card mb-3">
        <div class="card-body bg-secondary">
          <div class="row" style="margin-top: 20px;">
            <div class="col-lg-3">
              <h3 class="mb-0" style="color: white; font-weight: normal; font-style: italic;">Full Name</h3>
            </div>
            <h3 style="color: white; font-weight: normal; font-style: italic;">
              <?php echo $result1['username'] ?>
            </h3>
          </div>
          <hr>
          <div class="row" style="margin-top: 20px;">
            <div class="col-lg-3">
              <h3 class="mb-0" style="color: white; font-weight: normal; font-style: italic;">Email</h3>
            </div>
            <h3 style="color: white; font-weight: normal; font-style: italic;">
              <?php echo $result1['email'] ?>
            </h3>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-12">
              <a class="btn btn-info " href="updateprofile.php?id=<?php echo $result1['id']; ?>">Edit</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php
require("includes/footer.php");
?>
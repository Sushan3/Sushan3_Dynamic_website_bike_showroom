<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>KTM Duke Showroom</title>
</head>
<style>
body {
    background-image: url("images/5.png");
}
</style>
<body>
  </html>

<?php
require "user.php";
$user = new User();

if (isset($_POST['btnupdate'])) {
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $user->setPassword($password);

    if ($password == $cpassword) {
        if ($user->updatePassword($_SESSION['userid'])) {
            echo "<script>alert('Congratulation!!! Successfully updated!!');
    window.location = 'home.php';
     </script>";
        }
    }
    else{
        echo "<script>alert('Sorry!!! Password didnot matched.');
     </script>";
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>KTM Duke Showroom</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="updatelogin.php">Back</a></li>
    </ul>
  </div>
</nav> 
<div class="logo-div">
 <a href="index.php"><img class="logo-img" src="images/brand.png" alt="logo" style="float: left;"></a><br><br><br><br>
  </div>
 <h1 align="center">Update your password here</h1>
<div class="main" align="center">
<div class="login" width="40px;">
   <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header" align="center">
                                  
              <h4 class="modal-title" id="myModalLabel" align="center">Update Password </h4>
          </div>
          <div class="modal-body" align="center">
              <div class="row" align="center">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="password" class="control-label">New Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your new password" placeholder="your new password">
                                  <span class="help-block"></span>
                              </div>
                                <div class="form-group">
                                  <label for="password" class="control-label">Confirm Password</label>
                                  <input type="password" class="form-control" id="password" name="cpassword" value="" required="" title="Please enter your password again" placeholder="your new password again">
                                  <span class="help-block"></span>
                              </div>
                              <input type="submit" name="btnupdate" class="btn btn-success btn-block" value="Update">
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>

<script>
$(document).ready(function(){
    $("#loginbtn").click(function(){
        $("#loginModal").modal();
    });
});
$(document).ready(function(){
    $("#signupbtn").click(function(){
        $("#signupModal").modal();
    });
});
$(document).ready(function(){
    $("#adminbtn").click(function(){
        $("#adminmodal").modal();
    });
});
$("#slideshow > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
</script>
</body>
</html>
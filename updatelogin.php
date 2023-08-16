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
require 'user.php';
$user= new user();

if (isset($_POST['btnlog'])) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $user->setUserid($userid);
    $user->setPassword($password);

    if ($user->updatelogin()){
        session_start();
        $_SESSION['userid']=$userid;
        echo "<script>alert('Congratulation!!! Successfully updated!!');
    window.location = 'update.php';
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
        </ul>
    </div>
</nav>
<div class="logo-div">
    <a href="index.php"><img class="logo-img" src="images/brand.png" alt="logo" style="float: left;"></a><br><br><br><br>
</div>
<h1 align="center">KTM Duke Showroom</h1>
<div class="main" align="center">
    <div class="login" width="40px;">
        <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">

                    <h4 class="modal-title" id="myModalLabel" align="center">Login Again For Passowrd Update</h4>
                </div>
                <div class="modal-body" align="center">
                    <div class="row" align="center">
                        <div class="col-xs-6">
                            <div class="well">
                                <form id="loginForm" method="POST" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="userid" class="control-label">User id</label>
                                        <input type="text" class="form-control" id="userid" name="userid" required title="Please enter you userid" placeholder="eg Sushan123">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"  title="Please enter your password"required>
                                        <span class="help-block"></span>
                                    </div>
                                    <input type="submit" name="btnlog" class="btn btn-success btn-block" value="Login">
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
</script>
</body>
</html>
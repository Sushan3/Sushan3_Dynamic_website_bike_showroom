<?php
require 'user.php';
$user= new user();

if (isset($_POST['btnlog'])) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];


    $user->setUserid($userid);
    $user->setPassword($password);

    if ($user->login()) {
        session_start();
        $_SESSION['userid']=$userid;
        header('location:home.php');
    }
}

if (isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $dob=$_POST['dateofbirth'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $user->setFirstname($firstname);
    $user->setMiddlename($middlename);
    $user->setLastname($lastname);
    $user->setAddress($address);
    $user->setDob($dob);
    $user->setEmail($email);
    $user->setGender($gender);
    $user->setPhone($phone);
    $user->setUserid($userid);
    $user->setPassword($password);


    if ($password == $confirmpassword) {
        if ($user->addUser()) {
            echo "<script>alert('Congratulation!!! Signed Up Successfully!!');
    window.location = 'index.php';
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
            <li><a href="index.php">Home</a></li>
            <li><a href="admin.php">Admin-Login</a></li>
        </ul>
    </div>
</nav>
<div class="logo-div">
    <a href="index.php"><img class="logo-img" src="images/brand.png" alt="logo" style="float: left;"></a><br><br><br><br>
</div>
<h1 align="center">KTM Duke Showroom</h1>

<div class="container">

    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div class="modal fade" id="signupbtn" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Sign Up</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="POST">
                        <div class="form-group">
                            <label for="firstname"><span class="glyphicon glyphicon-user"></span> First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required="">
                        </div>
                        <div class="form-group">
                            <label for="middlename"><span class="glyphicon glyphicon-user"></span> Middle Name</label>
                            <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter middlename">
                        </div>
                        <div class="form-group">
                            <label for="lastname"><span class="glyphicon glyphicon-user"></span> Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required="" >
                        </div>
                        <div class="form-group">
                            <label for="address"><span class="glyphicon glyphicon-user"></span> Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label for="dateofbirth"><span class="glyphicon glyphicon-user"></span> Date Of Birth</label>
                            <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="Enter dateofbirth">
                        </div>
                        <div class="form-group">
                            <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="" >
                        </div>
                        <div class="form-group">
                            <label for="gender"><span class="glyphicon glyphicon-user"></span> Gender</label><br>
                            <input type="radio" id="usrname" name="gender" value="male"     checked="">male
                            <input type="radio" name="gender" value="female" >female
                            <input type="radio" name="gender" value="others" >others
                        </div>
                        <div class="form-group">
                            <label for="phone"><span class="glyphicon glyphicon-user"></span> Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                        </div>
                        <div class="form-group">
                            <label for="userid"><span class="glyphicon glyphicon-user"></span> Userid</label>
                            <input type="text" class="form-control" id="userid" name="userid" placeholder="Enter userid" required="">
                        </div>
                        <div class="form-group">
                            <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required="">
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required="">
                        </div>

                        <button type="submit" class="btn btn-success btn-block" name="signup"><span class="glyphicon glyphicon-off"></span> Sign Up</button>

                </div>

                </form>
            </div>

        </div>

    </div>
</div>
</div>


<div class="main">
    <div class="login">

        <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel" align="center">Login to Showroom</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="well">
                                <form id="loginForm" method="POST" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="userid" class="control-label">Userid</label>
                                        <input type="text" class="form-control" id="userid" name="userid" value="" required="" title="Please enter you phone no" placeholder="eg Sushan123">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                        <span class="help-block"></span>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember"> Remember login
                                        </label>
                                    </div>
                                    <input type="submit" name="btnlog" class="btn btn-success btn-block" value="Login">

                                </form>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <p class="lead">Register now for <span class="text-success">FREE</span></p>
                            <ul class="list-unstyled" style="line-height: 2">
                                <li><span class="fa fa-check text-success"></span> Instant Reeceive Notification</li>
                                <li><span class="fa fa-check text-success"></span> Time Saving</li>
                                <li><span class="fa fa-check text-success"></span> Reliable</li>
                                <li><span class="fa fa-check text-success"></span> Easy to Use</li>
                                <li><span class="fa fa-check text-success"></span> Service for You </li>
                                <li><span class="fa fa-check text-success"></span> Check New Bikes easily</li>
                            </ul>
                            <button type="button" class="btn btn-info btn-block" id="signupbtn">Register now!</button>
                            <p><a href="/new-customer/" ></a></p>
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
<!DOCTYPE html>
<html>
<head>
	<title>KTM Duke Showroom</title>
</head>
<style>
body {
    background-color: lightblue;
    background-image: url("images/5.png");
}
</style>
<body>

<div class="signup" align="center">
	 <form method="post" style="border: 2px solid blue; height: 100%; width: 450px; margin-top: 100px;">
	 	<marquee> <h1><u><i>Sign-Up</h1></u></i><br></u></h1></marquee>
		<a href="index.php"><input type="button" name="cancel" value="Home"></a>
<input type="reset" name="RESET">
<a href="login.php"><input type="button" name="back" value="Log-in"></a>
<p><h2 style="color:blue;margin-left:30px;">Name *: <input type="text" name="name" required=""></p>
<p>Address *: <input type="text" name="address" value="" required=""></p>
<p>ZipCode: <input type="text" name="zipcode" value=""></p>
<p>Phone *: <input type="text" name="phone" value="" required=""></p>
<p>Email : <input type="email" name="email" value=""></p>
<p>User Id *: <input type="text" name="userid" value="" required=""></p>
<p>Password *: <input type="password" name="password" value="" required=""></p>
<p>Confirm Password *: <input type="password" name="cpassword" value=""></p>
Gender* :<select name="gender"> 
<option value="select">   </option>
<option value="male">    Male   </option>
<option value="female">  Female </option>
<option value="others">  Others</option>
</select>
</h2><p>
<input type="submit" name="register" value="Register">
	</form>
</div>
</body>
</html>

<?php
require "user.php";
$usr = new User();

if(isset($_GET['id']))
{
$usr->selectRow($_GET['id']);
}


if(isset($_POST['register']))
{
$name = $_POST['name'];
$address = $_POST['address'];
$zipcode =$_POST['zipcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$userid = $_POST['userid'];
$password = $_POST['password'];
$cpassword =$_POST['cpassword'];
$gender = $_POST['gender'];

$usr->setName($name);
$usr->setAddress($address);
$usr->setZipcode($zipcode);
$usr->setPhone($phone);
$usr->setEmail($email);
$usr->setUserid($userid);
$usr->setPassword($password);
$usr->setCpassword($cpassword);
$usr->setGender($gender);

if ($password == $cpassword) {
	if ($usr->AddUser()) {
		echo "<script>alert('User Succesfully signup');
		window.location='index.php';
		</script>";

	}
}	
else{
		echo "<script>alert('Password didnt matched.');
        window.location = 'userform.php';
         </script>";
	}
	}	

	?>

	<script type="text/javascript">

$(function(){
    $("#submit_button").click(function(){
        var someText = $("#someText").val();
        $.post("/handle_ajax.php",{someText:someText},function(resp){
            if(resp !== "OK"){
                alert("ERROR OCCURED "+resp)
            }
        });
    });
});

</script>





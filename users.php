<?php
require "user.php";
$usr = new User();

if(isset($_GET['id']))
{
$usr->selectRow($_GET['id']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>KTM Duke Showroom</title>
</head>
<body>
	<style type="text/css">
	body {
    background-image: url("images/5.png");
}
</style>
	<img src="images/brand.PNG" class="icon">
<div class="form">
<form method="POST" enctype="multipart/form-data">
	<div class="title">
	<h1 align="center"><u> User</h1></u>
        <div class="title"><a href="adminwelcome.php">Home</a> <a href="adminbike.php">Specification</a><a href="adminbooking.php">  Booking</a>
            <a href="users.php">  Users</a> <a href="comment.php">Comment</a> <a href="index.php">  Logout</a></div>
	</div>
<?php
if(isset($_POST['update']))
{
    $id=$_POST['id'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$dob =$_POST['dob'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$userid = $_POST['userid'];
	$password = $_POST['password'];

	$usr->setfirstname($firstname);
	$usr->setmiddlename($middlename);
	$usr->setlastname($lastname);
	$usr->setAddress($address);
	$usr->setdob($dob);
	$usr->setemail($email);
	$usr->setgender($gender);
	$usr->setphone($phone);
	$usr->setuserid($userid);
	$usr->setPassword($password);

		if($usr->UpdateUser($id))
		{
		echo "User Updated";
		}
		}              
		$data =$usr->selectUser();
		echo"<table border='1' width=100%>
		<tr>
		<th>Id</th><th>Firstname</th><th>Middlename</th><th>Lastname</th>
		<th>Address</th><th>Date of Birth</th><th>Email</th>
		<th>Gender</th><th>Phone</th><th>Userid</th><th>Password</th><th>Edit</th><th>Delete</th>
		</tr>";
	foreach($data as $key)
	{
	echo "<tr><td>".$key['id']."</td><td>"
	               .$key['firstname']."</td><td>"
	               .$key['middlename']."</td><td>"
	               .$key['lastname']."</td><td>"
	               .$key['address']."</td><td>"
	               .$key['dob']."</td><td>"
	               .$key['email']."</td><td>"
	               .$key['gender']."</td><td>"
	               .$key['phone']."</td><td>"
	               .$key['userid']."</td><td>"
	               .$key['password']."</td>

	<td><a href='users.php?id=$key[id]'>Edit</a></td>
	<td><a href='delete.php?id=$key[id]'> Delete</a></td>
	</tr>";
	}
	echo"</table>";
	?>
<div class="signup" align="center">
	 <form method="post" style="border: 2px solid blue; height: 100%; width: 450px; margin-top: 100px;">
	 	<marquee> <h1><u><i>Edit Sign-Up</h1></u></i><br></u></h1></marquee>
<p><h2 style="color:blue;margin-left:30px;">First Name : <input type="text" name="firstname"  required=""
 value="<?php echo $usr->getFirstname();?>"
 ></p>
<p>Middle Name : <input type="text" name="middlename" value="<?php echo $usr->getMiddlename();?>"></p>
<p>Last Name : <input type="text" name="lastname" value="<?php echo $usr->getLastname();?>"></p>
<p>Address : <input type="text" name="address" value="<?php echo $usr->getAddress();?>"></p>
<p>Date Of Birth: <input type="date" name="dob" value="<?php echo $usr->getDob();?>"></p>
<p>Email : <input type="email" name="email" value="<?php echo $usr->getEmail();?>"></p>

<input type="hidden" name="id" value="<?php echo $usr->getId();?>">

Gender :<select name="gender"> 
<option <?= $usr->getGender()=='male' ? 'selected' : '' ?> value='male' >    Male   </option>
<option <?= $usr->getGender()=='female' ? 'selected' : '' ?> value='female'>  Female </option>
<option  <?= $usr->getGender()=='others' ? 'selected' : '' ?> value='others'>  Others</option>
</select>

<p>Phone : <input type="text" name="phone" value="<?php echo $usr->getPhone();?>" required=""></p>
<p>User Id : <input type="text" name="userid" value="<?php echo $usr->getUserid();?>" required=""></p>
<p>Password : <input type="password" name="password" value="<?php echo $usr->getPassword();?>"></p>

</h2><p>
<input type="submit" name="update" value="Update">
	</form>
</div>
</body>
	<style type="text/css">
	.form{
		border: 1px solid black;
		margin-top: 10px;
	}
	.inside{
		text-align: center;
		border: 2px solid black;
	}
	.img{
		margin-top: 20px;
		border: 1px solid black;
	}
	body{
		background-image: url("images/5.png");
	}
		.title{
		border: 1px solid black;
		
		text-align: center;
		font-size: 20px;
		font-family: cursive;
		margin: 30px;
		word-spacing: 20px;
	}
	.icon{
		height: 50px;
		border: 1px solid black;
		background-color: yellow;
	}
	.container{
		margin-left: 600px;
		background-image: url("images/5.png");
	}
</style>
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
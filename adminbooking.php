<?php

if ($conn = mysqli_connect("localhost","root","","web")==false) {
   header("location:setup.php");
   die();
   header("location:index.php");
 }

require "booking.php";
$booking = new booking();

if(isset($_GET['id']))
{
    $booking->selectRow($_GET['id']);
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
            <h1 align="center"><u> Booking</h1></u>
            <div class="title"><a href="adminwelcome.php">Home</a> <a href="adminbike.php">Specification</a><a href="adminbooking.php">  Booking</a>
                <a href="users.php">  Users</a> <a href="comment.php">Comment</a> <a href="index.php">  Logout</a></div>
        </div>
        <?php
        if(isset($_POST['update']))
        {
            $id=$_POST['id'];
            $userid=$_POST['userid'];
            $email=$_POST['email'];
            $bikemodel=$_POST['bikemodel'];
            $price=$_POST['price'];
            $phone=$_POST['phone'];

            $booking->setUserid($userid);
            $booking->setEmail($email);
            $booking->setBikemodel($bikemodel);
            $booking->setPrice($price);
            $booking->setPhone($phone);

            if($booking->UpdateBooking($id))
            {
                echo "Booking Updated";
            }
        }

        $data =$booking->selectbooking();
        echo"<table border='1' width=100%>
		<tr>
		<th>Id</th><th>Userid</th><th>Email</th><th>Bikemodel</th><th>Phone</th><th>Edit</th><th>Delete</th>
		</tr>";
        foreach($data as $key)
        {
            echo "<tr><td>".$key['id']."</td><td>"
                .$key['userid']."</td><td>"
                .$key['email']."</td><td>"
                .$key['bikemodel']."</td><td>"
                .$key['phone']."</td>

	<td><a href='adminbooking.php?id=$key[id]'>Edit</a></td>
	<td><a href='deletebook.php?id=$key[id]'>Delete</a></td>
	</tr>";
        }
        echo"</table>";
        ?>
        <div class="signup" align="center">
            <form method="post" style="border: 2px solid blue; height: 100%; width: 450px; margin-top: 100px;">
                <marquee> <h1><u><i>Edit Booking</h1></u></i><br></u></h1></marquee>
                <p><h2 style="color:blue;margin-left:30px;">Userid : <input type="text" name="userid"  required=""
                                                                            value="<?php echo $booking->getUserId();?>"
                    ></p>
                <p>Email : <input type="text" name="email" value="<?php echo $booking->getEmail();?>"></p>
                <p>Bikemodel : <input type="text" name="bikemodel" value="<?php echo $booking->getBikeModel();?>"></p>
                <p>Phone: <input type="number" name="phone" value="<?php echo $booking->getPhone();?>"></p>

                <input type="hidden" name="id" value="<?php echo $booking->getId();?>"

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

<!--
<?php

$uid=$_GET['id'];

if(isset($uid))
{

    $usr->selectRow($uid);
}


?> -->
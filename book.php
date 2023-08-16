<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('location:login.php');
}
require "booking.php";
$book = new booking();

if(isset($_GET['id']))
{
    $book->selectRow($_GET['id']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>KTM Duke Showroom</title>
</head>
<body>
<img src="images/brand.PNG" class="icon">
<div style=" border: 5px solid black;">

    <div class="title">
        <h1 align="center"><u>BIKE BOOKING SECTION</u></h1>

        <div class="form" align="center">
            <form method="POST" enctype="multipart/form-data">
                <?php
                if (isset($_POST['btnpost']))
                {
                    $userid=$_POST['userid'];
                    $email=$_POST['email'];
                    $bikemodel=$_POST['bikemodel'];
                    $phone=$_POST['phone'];

                    $book->setUserId($userid);
                    $book->setEmail($email);
                    $book->setBikemodel($bikemodel);
                    $book->setPhone($phone);

                    if($book->insertbooking())
                    {
                        echo "<script>alert('Congratulation!!! Booked Successfully!!');
    window.location = 'home.php';
     </script>";
                    }
                }
                $data =$book->selectbooking();
                echo"<table border='1' width=100%>
		<tr>
		<th>ID</th>
		<th>Userid</th>
		<th>Email</th>
		<th>Bikemodel</th>
	 <th>Phone</th>
		</tr>";
                foreach($data as $key)
                {
                    echo "<tr><td>".$key['id']."</td><td>"
                        .$key['userid']."</td><td>"
                        .$key['email']."</td><td>"
                        .$key['bikemodel']."</td><td>"
                        .$key['phone']."</td>
	</tr>";
                }
                echo"</table>";
                ?>
                <br>
                <br>
                <div class="signup" align="center">
                    <form method="post" style="border: 2px solid blue; height: 100%; width: 450px; margin-top: 100px;">
                        <marquee> <h1><u><i>Booking</h1></u></i><br></u></h1></marquee>
                        <p>Userid: <input type="text" name="userid" value="<?php $a= $_SESSION['userid']; echo $a;?>"></p>
                        <p>Email: <input type="email" name="email" value="" required></p>
                        <p>Bikemodel:<input type="text" name="bikemodel" value="" </p>
                        <p>Phone:<input type="number" name="phone"></p>

                <input type="Submit" name="btnpost" value="Post"><br><br>
                <!-- <textarea name="comment" cols="20" rows="3"></textarea> -->
            </form>
        </div>
    </div>
</body>
<form method="POST" align="center"><br>
    <a href="home.php" <input type="button" name="home" value="Home" > Home</a>
</form>

</html>

<style>
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
    .form{
        border: 1px solid black;
        margin-top: 10px;
    }
    .icon{
        height: 50px;
        border: 1px solid black;
        background-color: yellow;
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
    }
</script>
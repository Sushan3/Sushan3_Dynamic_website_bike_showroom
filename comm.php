<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('location:login.php');
}
require "usercomment.php";
$comm = new usercomment();

if(isset($_GET['id']))
{
    $comm->selectRow($_GET['id']);
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
        <h1 align="center"><u>POST COMMENT & RATE SECTION</u></h1>

    <div class="form" align="center">
        <form method="POST" enctype="multipart/form-data">
            <?php
            if (isset($_POST['btnpost']))
            {
                $bikemodel=$_POST['bikemodel'];
                $rate=$_POST['rate'];
                $comment=$_POST['comment'];

                $comm->setBikemodel($bikemodel);
                $comm->setRate($rate);
                $comm->setComment($comment);

                if($comm->insertComment())
                {

                    echo "<script>alert('Congratulation!!! Rate and Commented Successfully!!');
    window.location = 'home.php';
     </script>";
                }
            }
            $data =$comm->selectComment();
            echo"<table border='1' width=100%>
		<tr>
		<th>ID</th>
		<th>Bikemodel</th>
	 <th>Rate</th>
		<th>Comment</th>
		</tr>";
            foreach($data as $key)
            {
                echo "<tr><td>".$key['id']."</td><td>"
                    .$key['bikemodel']."</td><td>"
                    .$key['rate']."</td><td>"
                    .$key['comment']."</td>
	</tr>";
            }
            echo"</table>";
            ?>
            <br>
            <br>
            Bikemodel:<select name="bikemodel">
                <option  value='Duke790' >  Duke790  </option>
                <option value='RC200'>  RC200 </option>
                <option  value='Duke390'>  Duke390 </option>

            </select>
            Rate :<select name="rate">
                <option value='1star' > 1star  </option>
                <option value='2star'>  2star </option>
                <option value='3star'>  3star </option>
            </select>


            <br><br>
            Comment: <textarea name="comment" required="" cols="40" rows="4"></textarea><br><br>
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
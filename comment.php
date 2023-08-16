<?php
require "com.php";
$comment = new com();

if(isset($_GET['id']))
{
    $comment->selectRow($_GET['id']);
}
?>
<?php
if (isset($_POST['btnpost'])) {
    $userid = $_POST['userid'];
    $bikemodel=$_POST['bikemodel'];
    $rate=$_POST['rate'];
    $comment=$_POST['comment'];

    $comment->setUserid($userid);
    $comment->setBikemode($bikemodel);
    $comment->setRate($rate);
    $comment->setRate($comment);

    if($comment->addComment())
    {
        echo "Successfully rate and commented";
    }
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
        <div class="title"><a href="adminwelcome.php">Home</a> <a href="adminbike.php">Specification</a><a href="adminbooking.php">  Booking</a>
            <a href="users.php">  Users</a> <a href="comment.php">Comment</a> <a href="index.php">  Logout</a></div>
    </div>

    <div class="form" align="center">
        <form method="POST" enctype="multipart/form-data">
            <?php
            if (isset($_GET['id']))
            {
                $comment->deletComment($_GET['id']);
                echo "Comment successfully Deleted";
            }
            $data =$comment->selectComment();
            echo"<table border='1' width=100%>
		<tr>
		<th>ID</th>
		<th>Bikemodel</th>
	 <th>Rate</th>
		<th>Comment</th>
		<th>Delete</th>
		</tr>";
            foreach($data as $key)
            {
                echo "<tr><td>".$key['id']."</td><td>"
                    .$key['bikemodel']."</td><td>"
                    .$key['rate']."</td><td>"
                    .$key['comment']."</td>
                    <td><a href='comment.php?id=$key[id]'>Delete</a></td>
	</tr>";
            }
            echo"</table>";
            ?>
            <br>
            <br>

            <!-- <textarea name="comment" cols="20" rows="3"></textarea> -->
</div>
</div>
</body>
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
<?php

if ($conn = mysqli_connect("localhost","root","","web")==false) {
   header("location:setup.php");
   die();
   header("location:index.php");
 }

require "bike.php";
$bike = new bike();

if(isset($_GET['id']))
{
    $bike->selectRow($_GET['id']);
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
<img src="images/brand.png" class="icon">
<div class="form">
    <form method="POST" enctype="multipart/form-data">
        <div class="title">
            <h1 align="center"><u> Specification</h1></u>
            <div class="title"><a href="adminwelcome.php">Home</a> <a href="adminbike.php">Specification</a><a href="adminbooking.php">  Booking</a>
                <a href="users.php">  Users</a> <a href="comment.php">Comments</a> <a href="index.php">  Logout</a></div>
        </div>
        <?php
        if (isset($_POST['insert']))
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $type=$_POST['type'];
            $status=$_POST['status'];
            $price=$_POST['price'];
            $feature=$_POST['features'];
            $engine=$_POST['engine'];
            $mileage=$_POST['mileage'];
            $no=$_POST['no'];
            $images = $_FILES['images']['name'];
            $imgtn = $_FILES['images']['tmp_name'];
            $file_name=$_FILES['images']['name'];
            $file_type=pathinfo($file_name,PATHINFO_EXTENSION);
            if($file_type==="jpg" || $file_type==="png" || $file_type==="gif")
            {
                move_uploaded_file($_FILES['images']['tmp_name'],"images/".$file_name);
            }
            else
            {

                echo"Invalid File format";

            }
            $bike->setName($name);
            $bike->setType($type);
            $bike->setStatus($status);
            $bike->setPrice($price);
            $bike->setFeatures($feature);
            $bike->setEngine($engine);
            $bike->setMileage($mileage);
            $bike->setNo($no);
            $bike->setImages($images);

            if($bike->insertSpecification())
            {
                echo "Successfully inserted";
            }
        }
        if(isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $type = $_POST['type'];
            $status = $_POST['status'];
            $price = $_POST['price'];
            $feature = $_POST['features'];
            $engine=$_POST['engine'];
            $mileage=$_POST['mileage'];
            $no=$_POST['no'];

            $images = $_FILES['images']['name'];
            $imgtn = $_FILES['images']['tmp_name'];
            $file_name = $_FILES['images']['name'];
            $file_type = pathinfo($file_name, PATHINFO_EXTENSION);
            if ($file_type === "jpg" || $file_type === "png" || $file_type === "gif") {
                move_uploaded_file($_FILES['images']['tmp_name'], "images/" . $file_name);
            } else {

                echo "Invalid File format";
}

                $bike->setName($name);
                $bike->setType($type);
                $bike->setStatus($status);
                $bike->setPrice($price);
                $bike->setFeatures($feature);
                $bike->setEngine($engine);
                $bike->setMileage($mileage);
                $bike->setNo($no);
                $bike->setImages($images);

                if ($bike->updateSpecification($id)) {
                    echo "Specification Updated";
                }

        }
        $data =$bike->selectSpecification();
        echo"<table border='1' width=100%>
		<tr>
		<th>Id</th><th>Name</th><th>Type</th><th>Status</th>
		<th>Price</th><th>Features</th><th>Engine</th><th>Mileage</th><th>Gears</th><th>Image</th>
		<th>Edit</th><th>Delete</th>
		</tr>";
        foreach($data as $key)
        {
            echo "<tr><td>".$key['id']."</td><td>"
                .$key['name']."</td><td>"
                .$key['type']."</td><td>"
                .$key['status']."</td><td>"
                ."Rs.".$key['price']."</td><td>"
                .$key['feature']."</td><td>"
                .$key['engine']."</td><td>"
                .$key['mileage']."</td><td>"
                .$key['no']."</td><td>
                <img src='images/".$key['images']."' height='100' width='100'  align='center'/> </td>
	<td><a href='adminbike.php?id=$key[id]'>Edit</a></td>
	<td><a href='deletebike.php?id=$key[id]'>Delete</a></td>
	</tr>";
        }
        echo"</table>";
        ?>
        <div class="signup" align="center">
            <form method="post" style="border: 2px solid blue; height: 100%; width: 450px; margin-top: 100px;">
                <marquee> <h1><u><i>Edit Specification</i</u></h1><br></marquee>
                <p><h2 style="color:blue;margin-left:30px;">Name : <input type="text" name="name"  required=""
                                                                          value="<?php echo $bike->getName();?>"
                    ></p>
                <p>Type : <input type="text" name="type" value="<?php echo $bike->getType();?>"></p>
                <input type="hidden" name="id" value="<?php echo $bike->getId();?>">
                Select Status :<select name="status">
                    <option <?= $bike->getStatus()=='Naked' ? 'selected' : '' ?> value='Naked' >    Naked   </option>
                    <option <?= $bike->getStatus()=='Sport Tourer' ? 'selected' : '' ?> value='Sport Tourer'>  Sport Tourer </option>
                    <option  <?= $bike->getStatus()=='Supersport' ? 'selected' : '' ?> value='Supersport'>  Supersport</option>
                </select>
                <p>Price : <input type="number" name="price" value="<?php echo $bike->getPrice();?>" required=""></p>
                <p>Features: <input type="text" name="features" value="<?php echo $bike->getFeatures();?>" required=""></p>
                <p>Engine : <input type="text" name="engine" value="<?php echo $bike->getEngine();?>" required=""></p>
                <p>Mileage : <input type="text" name="mileage" value="<?php echo $bike->getMileage();?>" required=""></p>
                <p>Number of Gears : <input type="text" name="no" value="<?php echo $bike->getNo();?>" required=""></p>
                <p>Image : <input type="file" name="images" value="<?php echo $bike->getImages();?>"></p>
                </h2><p>
                    <input type="submit" name="update" value="Update">
                    <input type="submit" name="insert" value="Insert">
            </form>
        </div>
</body>
</html>
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
    .container {
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
}
</script>
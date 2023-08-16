<?php
require "bike.php";
$bike = new bike();

if(isset($_GET['id']))
{
    $bike->selectRow($_GET['id']);
}

if(isset($_GET['id']))
{
    if($bike->UpdateSpecification($_GET['id']))
    {
        echo "Specification updated";
    }
}
if (isset($_POST['insert']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $status=$_POST['status'];
    $price=$_POST['price'];
    $feature=$_POST['features'];
    $images = $_FILES['images']['name'];
    $imgtn = $_FILES['images']['tmp_name'];
    $file_name=$_FILES;
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
    $bike->setImages($images);
    if($bike->insertSpecification())
    {
        echo "Successfully inserted";
    }
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Duke Bike Showroom</title>
    </head>
    <body>
    <!-- <img src="images/logo.jpg" class="icon"> -->
    <div class="form">
        <form method="POST" enctype="multipart/form-data">
            <div class="title">
                <h1 align="center"><u> Specification</h1></u>
                <div class="title"><a href="adminwelcome.php">Home</a> <a href="adminbike.php">Specification</a><a href="adminbooking.php">  Booking</a><a href="users.php">  Users</a><a href="index.php">  Logout</a></div>
            </div>
            <div class="inside">
                <img src="images/list.jpg" class="img">
                <marquee> <h1><u><i>Edit Specification</u></i><br></u></h1></marquee>
                <input type="hidden" name="id" value="<?php echo $bike->getId();?>">
                <p>Name : <input type="text" name="name" placeholder="Enter your name..." value="<?php echo $bike->getName();?>" /></p>
                <p>Type : <input type="text" name="type" value="<?php echo $bike->getType();?>" /></p>


                Select the Status :<select name="status">

                    <option <?= $bike->getStatus()=='Naked' ? 'selected' : '' ?> value='Naked'>Naked</option>
                    <option <?= $bike->getStatus()=='Sport Tourer' ? 'selected' : '' ?> value='Sport Tourer'>Sport Tourer</option>
                    <option <?= $bike>getStatus()=='Supersport' ? 'selected' : '' ?> value='Supersport'>Supersport</option>
                </select>
                <p>Price : <input type="number" name="price" value="<?php echo $bike->getPrice();?>" /></p>
                <p>Features : <input type="text" name="features" value="<?php echo $bike->getFeatures();?>" /></p>
                <p>Image : <input type="file" name="images" width="100" height="30"/ value="<?php echo $bike->getImages();?>" required="" >
                <p><input type="submit" name="insert" value="Insert"/>
                    <input type="submit" name="update" value="Update"/></p>
            </div>
        </form>
    </div>




    <style type="text/css">
        .form{
            border: 1px solid black;
            background: #2aabd2;
        }
        .inside{
            text-align: center;
            margin-top: -50px;
        }
        .title{
            border: 1px solid black;
            text-align: center;
        }
        .img{
            width: 80%;
            /*position: relative;
            float: left;*/
            margin-top: 10px;
            height: 600px;
            border: 2px solid yellow;

        }
        .icon{
            height: 50px;
            border: 1px solid black;
            background-color: yellow;
            float: left;
        }
        .title{
            border: 1px solid black;
            text-align: center;
            font-size: 20px;
            font-family: cursive;
            margin: 30px;
            word-spacing: 20px;
        }
        .update
        {
            margin-left: 700px;
        }
        <style type="text/css">
                              .form{
                                  border: 1px solid black;
                                  margin-top: 10px;
                              }
        .inside{
            text-align: center;
            border: 2px solid black;
            margin: auto;
            width: 500px;
            background: #1b6d85;
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
    <table border='1' width='100%' style=" color: white; font-size: 20px; background-color: rgba(36, 22, 22, 0.43); ">
        <tr>
            <th class="text-center" style="padding: 5px;">
                Id</th>
            <th class="text-center" style="padding: 5px;">Name</th>
            <th class="text-center" style="padding: 5px;">Type</th>
            <th class="text-center" style="padding: 5px;">Status</th>
            <th class="text-center" style="padding: 5px;">Price</th>
            <th class="text-center" style="padding: 5px;">Features</th>
            <th class="text-center" style="padding: 5px;">Image</th>
            <th class="text-center" style="padding: 5px;">Edit</th>
            <th class="text-center" style="padding: 5px;">Delete</th>
        </tr>

        <?php
        $data =$bike->selectSpecification();
        foreach($data as $key)
        {
            echo "<tr><td>".$key['id']."</td><td >"
                .$key['name']."</td><td>"
                .$key['type']."</td><td>"
                .$key['status']."</td><td>"
                ."Rs.".$key['price']."</td><td>"
                .$key['feature']."</td><td>
          <img src='images/".$key['images']."' height='100' width='100' /> </td>
       <td><a href='adminbike.php?id=$key[id]'>Edit</a></td>
       <td><a href='deletebike.php?id=$key[id]'>Delete</a></td>
</tr>";
        }
        ?>
    </table>

    </body>
    </html>

<?php
if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $feature =$_POST['features'];
    $images = $_POST['images'];


    $bike->setName($name);
    $bike->setType($type);
    $bike->setStatus($status);
    $bike->setPrice($price);
    $bike->setFeatures($feature);
    $bike->setImages($images);

    if($bike->UpdateSpecification($id))
    {
        echo "Specification Updated";
    }
}

?>
<?php
if ($conn = mysqli_connect("localhost","root","","web")==false) {
    header("location:setup.php");
    die();
    header("location:index.php");
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
            <h1 align="center"><u> Welcome Admin</h1></u>
            <div class="title"><a href="adminwelcome.php">Home</a> <a href="adminbike.php">Specification</a><a href="adminbooking.php">  Booking</a>
                <a href="users.php">  Users</a> <a href="comment.php">Comment</a> <a href="index.php">  Logout</a></div>
        </div>
        <div class="form">
            <div class="IMG" align="center">
                <a href="admincabin.php"><img src="images/201.jpg" class="img1"></a>
                <a href="adminbooking.php"><img src="images/banner.jpg" class="img2"></a>
                <a href="users.php"><img src="images/250.jpg" class="img3"></a>
            </div>
            <p class="p">
                Duke Bike Showroom are a new holiday company and they offer log cabin holidays in different parts of the UK. These holidays offer luxury lodges nestled deep in woodland across the Peak District and are a perfect retreat. There is a choice of three different cabins, luxury, contemporary and original.  All have a lavish style and include hot tubs. The park has a number of features including a swimming pool, restaurant and small supermarket. There are 100s of acres of peaceful woodland to explore.

                Duke Bike Showroom need a website to attract new customers and this needs to include an online booking system and details of the facilities at the park and the log cabins. You have been commissioned by the owners to produce a web-based application, which will enable customers to view the log cabins at the park and book online and have access to an online community forum, in which they will be able to ask questions and also answer questions from other customers.

                The owners have asked you to create a Booking System which allows visitors to create their own personal account. The system will store the personal details of each customer, their email address, postal address including postcode and gender so that appropriate marketing material can be sent in future. Different prices are charged during the busier summer months and each log cabin has a minimum price for at least 2 adults and 2 children. Each cabin can be booked for a weekend 4 days (Friday to Monday) or 5 days (Monday to Friday).
            </p>
        </div>
        <style type="text/css">
            .head{
                text-align: center;
                font-family: serif;
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
            .IMG{
                border: 1px solid black;
            }
            .img1{
                width: 450px;
                height: 400px;
                margin: 10px;
                border: 1px solid black;
            }
            .img2{
                width: 450px;
                height: 400px;
                margin: 10px;
                border: 1px solid black;
            }
            .img3{
                width: 450px;
                height: 400px;
                margin: 10px;
                border: 1px solid black;
            }
            .p{
                font-family: cursive;
            }
            .title{
                border: 1px solid black;

                text-align: center;
                font-size: 20px;
                font-family: cursive;
                margin: 30px;
                word-spacing: 20px;
            }
        </style>
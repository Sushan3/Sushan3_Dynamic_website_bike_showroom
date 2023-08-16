<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('location:index.php');
}
require "booking.php";
$booking=new booking();
$id= $_GET['id'];
$booking->deleteBooking($id);
header("location:adminbooking.php");
echo ("Sucsessfully Deleted");
?>


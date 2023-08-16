<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('location:login.php');
}
require "bike.php";
$usr=new bike();
$id= $_GET['id'];
if($usr->DeleteSpecification($id));
{
	echo "Successfully deleted";
}
header("location:adminbike.php");
?>

alert("deleted successfully");
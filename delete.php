<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header('location:login.php');
}
require "user.php";
$usr=new User();
$id= $_GET['id'];

$usr->deleteUser($id);
header("location:users.php");
alert("Deleted successfully");
?>


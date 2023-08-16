<?php 

$conn = mysqli_connect('localhost','root','');
mysqli_query($conn,"create database If not exists web");
mysqli_select_db($conn,'web');





mysqli_query($conn,"CREATE TABLE IF NOT EXISTS booking(

	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bikemodel` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");



mysqli_query($conn,"CREATE TABLE IF NOT EXISTS specification(

	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");


mysqli_query($conn,"CREATE TABLE IF NOT EXISTS user(

	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\");

header("location:index.php")
?>

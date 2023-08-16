<?php
  $db = mysqli_connect('localhost', 'root', '', 'web');
  if (isset($_POST['username_check'])) {
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM users WHERE userid='$userid'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  if (isset($_POST['save'])) {
    $userid = $_POST['userid'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "exists";    
      exit();
    }else{
      $query = "INSERT INTO users (userid, email, password) 
            VALUES ('$username', '$email', '".md5($password)."')";
      $results = mysqli_query($db, $query);
      echo 'Saved!';
      exit();
    }
  }

  ?>
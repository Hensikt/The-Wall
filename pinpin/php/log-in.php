<?php
//Login process
include "db.php";
//sql injection protection
$username = filter_var($_POST['user_name'], FILTER_SANITIZE_EMAIL);
$result = $connection->query("SELECT * FROM users WHERE user_name='$username'");

if($result->rowCount()== 0) { // user doesnt exist
  $_SESSION['message'] = "User with that email doesn't exist!";
  header("location: error.php");
} else { // user exists
  $user = $result->fetch();

  if(password_verify($_POST['pwd'], $user['pwd'])) {
    session_start();
    $_SESSION['email'] = $user['email'];
    $_SESSION['user_name'] = $user['user_name'];
    $_SESSION['active'] = $user['active'];
    $_SESSION['logged_in'] = true;

    header("location: ../yourwall.php");
  } else {
    $_SESSION['message'] = "You have entered wrong password, try again!";
    header("location: error.php");
  }
}
?>

<?php
include 'php/db.php';
if ($_SESSION['logged_in'] == true) {
  include 'header-logout.php';
} else {
  include 'header-login.php';
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PINPIN.INC</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Pascal Kuiper 12851 || ">
  <meta name="copyright" content="Pascal Kuiper PinPin.Inc" />
  <meta name="keywords" content="Wall, MessageBoard, Pintrest" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" type="image/png" href="img/Pinpin_-_rgb_1000px.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>

<body>
  <div class="wrapper">
    <div class="form-container">
      <!-- <form class="Form2" action="" method="post"> -->
        <div class="Form2">
          <h1>LOGIN</h1>
          <div class="login-page">
            <div class="form-2">

              <form class="register-form" action="php/hash.php" method="post">
                <input type="text" placeholder="user name" name="user_name"/>
                <input type="text" placeholder="first name" name="first_name"/>
                <input type="text" placeholder="last name" name="last_name"/>
                <input type="text" placeholder="email address" name="email"/>
                <input type="password" placeholder="password" name="pwd"/>
                <input class="sign" type="submit" name="" value="SIGN UP">
                <p class="message"><a href="#">forgotten password?</a></p>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
              </form>

              <form class="login-form-2" action="php/log-in.php" method="post">
                <input type="text" placeholder="user name" name="user_name" />
                <input type="password" placeholder="password" name="pwd"/>
                <button class="sign-2">login</button>
              </form>

            </div>
          </div>
        </div>
      <!-- </form> -->
    </div>
  </div>

  <!-- <footer class="bottom">

    </footer> -->
</body>

</html>

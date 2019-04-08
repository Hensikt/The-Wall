<?php
require 'php/db.php';
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
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="/path/to/masonry.pkgd.min.js"></script>

  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(inset($_POST['login'])) { //user loggin in
        require 'log-in.php';
      } elseif(inset($_POST['register'])) {
        require 'sign-in.php';
      }
    }
  ?>
</head>

<body>
  <header>
    <div class="container">

      <a href="index.php">
        <div class="logo"></div>
      </a>

      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="yourwall.php">Your Wall</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="wrapper">
    <div class="form-container">
      <form class="Form2" action="" method="post">
        <div class="">
          <h1>LOGIN</h1>
          <div class="login-page">
            <div class="form-2">

              <form class="register-form" action="" method="post">
                <input type="text" placeholder="user name" />
                <input type="text" placeholder="first name" />
                <input type="text" placeholder="last name" />
                <input type="text" placeholder="email address" />
                <input type="password" placeholder="password" />
                <input class="sign" type="submit" name="" value="SIGN UP">
                <p class="message"><a href="#">forgoten password?</a></p>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
              </form>

              <form class="login-form-2" action="" method="post">
                <input type="text" placeholder="email" />
                <input type="password" placeholder="password" />
                <button class="sign-2">login</button>
              </form>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- <footer class="bottom">

    </footer> -->
</body>

</html>

<?php
include 'php/db.php';
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
    <link rel="shortcut icon" type="image/png" href="img/Pinpin_-_rgb_1000px.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

<body>
<header>
    <div class="container">

        <a href="index.php"><div class="logo"></div></a>

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
    <div class="form-container"> <!-- SearchBar navigation-->
        <form class="search" action="searchresults.php" method="post" action="search">
            <input type="text" name="search" size="40" maxlength="50" value="Search Here" class="searchTerm" onfocus="this.value=''">
            <input type="submit" name="submition" value="Go" class="searchButton">
        </form>

        <form class="Form2" action="searchresults.php" method="post"> <!-- Image displaying -->
            <?php
            $sql = "SELECT p.*, u.username FROM `Pics` p, `users` u WHERE u.username = p.username ORDER BY `id` DESC";
            $stmt = $connection->query($sql);
            foreach ($stmt as $record) {
                echo "<div class=Image-container>" .
                    "<h4>" . $record['username'] . "</h4>" .
                    "<img src='uploads/" . $record['name'] . "'>" .
                    "<p>" . $record['text'] . "</p>" .
                    "</div>";
            }
            ?>
        </form>

    </div>
</div>


</body>
</html>

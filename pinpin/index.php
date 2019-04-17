<?php
include 'php/db.php';
include 'php/login-check.php';
if ($_SESSION['logged_in'] == true) {
    include 'header-logout.php';
} else {
    include 'header-login.php';
}
?>

<div class="wrapper">
    <div class="form-container"> <!-- SearchBar navigation-->
        <form class="search" action="searchresults.php" method="post" action="search">
            <input type="text" name="search" size="40" maxlength="50" value="Search Here" class="searchTerm" onfocus="this.value=''">
            <input type="submit" name="submition" value="Go" class="searchButton">
        </form>

        <form class="Form2" action="searchresults.php" method="post"> <!-- Image displaying -->
            <?php
            $sql = "SELECT * FROM `Pics` ORDER BY `id` DESC";
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

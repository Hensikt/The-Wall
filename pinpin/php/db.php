<?php
 $host       = "127.0.0.1";
 $username   = "c3655Hensikt";
 $password   = "#AB2sqZpaXqS";
 $dbname     = "c3655thewall"; // will use later
//$host       = "localhost";
//$username   = "root";
//$password   = "";
//$dbname     = "thewall"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
  $connection = new PDO($dsn, $username, $password, $options);
} catch (PDOException $error){
  echo "Fout bij verbinden: " . $error->getMessage();
  exit;
}
?>

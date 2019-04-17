<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();

    include 'db.php';

    $first = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $last = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $hash = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);
    $user_name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);

    $check = "SELECT `id`  FROM `users` WHERE `user_name` =?";
    $statement_check = $connection->prepare($check);
    $data_check = array($user_name);
    $statement_check->execute($data_check);
    $user_id = $statement_check->fetchColumn();

    if(!$user_id){

    $pwd = password_hash($hash, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `pwd`, `user_name`) VALUES (?,?,?,?,?)";
    $statement = $connection->prepare($sql);
    $data = array($first,$last,$email,$pwd,$user_name);

    $statement->execute($data);
    echo "Checked mate";
    header('Location: ../login.php');
    } else {
    echo "Username in use";
    }

  } else {
    echo "Fout";
    echo $errors;
    exit();
  }

?>

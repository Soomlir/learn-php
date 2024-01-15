<?php
require_once("db.php");
session_start();

if (isset($_POST['submit'])) {
  $login = htmlspecialchars(trim($_POST['login']));
  $password = htmlspecialchars(trim($_POST['password']));

  if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
    $query = "SELECT * FROM `users` WHERE `email` = '".$login."' LIMIT 1";
  } else {
    $query = "SELECT * FROM `users` WHERE `phone` = '".$login."' LIMIT 1";
  }

  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) == 1) {
    
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $row['login'];
      header("Location: /pages/profile.php");
    } else {
      $_SESSION['error'] = 'Не верный логин или пароль';
      header("Location: /pages/login.php");
    }
  } else {
    $_SESSION['error'] = 'Не верный логин или пароль';
    header("Location: /pages/login.php");
  }
}

<?php
  require_once("db.php");
  session_start();

if (isset($_POST['submit-edit'])) {
  $login = htmlspecialchars(trim($_POST['login']));
  $phone = htmlspecialchars(trim($_POST['phone']));
  $email = htmlspecialchars(trim($_POST['email']));

  $password1 = htmlspecialchars(trim($_POST['password1']));
  $password2 = htmlspecialchars(trim($_POST['password2']));
  $password3 = htmlspecialchars(trim($_POST['password3']));

  if (empty($login)) {
    $login = $_SESSION['login'];
  }

  if (empty($phone)) {
    $phone = $_SESSION['phone'];
  }

  if (empty($email)) {
    $email = $_SESSION['email'];
  }

  $query = "SELECT * FROM `users` WHERE `login` = '".$_SESSION['username']."' LIMIT 1";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);

  $query_all_rows = "SELECT * FROM `users` WHERE `id` != '".(int)$row['id']."' "; 
  $result2 = mysqli_query($db, $query_all_rows);

  while ($row2 = mysqli_fetch_assoc($result2)) {
    if ($login === $row2['login']) {
      $_SESSION['duplicate_login'] = "Логин $login уже занят";
      header("Location: ../pages/profile-edit.php");
      exit();
    }

    if ($phone === $row2['phone']) {
      $_SESSION['duplicate_phone'] = "Телефон $phone уже занят";
      header("Location: ../pages/profile-edit.php");
      exit();
    }

    if ($email === $row2['email']) {
      $_SESSION['duplicate_email'] = "Логин $email уже занят";
      header("Location: ../pages/profile-edit.php");
      exit();
    }
  }


  $query = "UPDATE `users` SET `login` = '".$login."', `phone` = '".$phone."', `email` = '".$email."' WHERE `id` = '".$row['id']."' LIMIT 1";
  $result = mysqli_query($db, $query);
  $_SESSION['username'] = $login;

  if (isset($password1) && !empty($password1) && isset($password2) && !empty($password2) && isset($password3) && !empty($password3)) {
    $query = "SELECT * FROM `users` WHERE `id` = '".$row['id']."' LIMIT 1";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password1, $row['password'])) {
      if ($password2 === $password3) {
        $query = "UPDATE `users` SET `password` = '".password_hash($password2, PASSWORD_DEFAULT)."'  WHERE `id` = '".$row['id']."' LIMIT 1";
        $result = mysqli_query($db, $query);    
        $_SESSION['password_ok'] = 'Пароль изменен'; 
        header("Location: ../pages/profile.php");
        exit();
      } else {
        $_SESSION['error_password'] = 'Ошибка при заполнении новых паролей';
        header("Location: ../pages/profile-edit.php");
      }
    } else {
      $_SESSION['error_password'] = 'Не правильный старый пароль';
      header("Location: ../pages/profile-edit.php");
    }
  }
  header("Location: ../pages/profile-edit.php");
}

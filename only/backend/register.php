<?php
require_once("db.php");
session_start();

if (isset($_POST['submit-register'])) {
  $count_error = 0;

  $login = htmlspecialchars(trim($_POST['login']));
  $phone = htmlspecialchars(trim($_POST['phone']));
  $email = htmlspecialchars(trim($_POST['email']));

  $password1 = htmlspecialchars(trim($_POST['password1']));
  $password2 = htmlspecialchars(trim($_POST['password2']));

  $query = "SELECT * FROM `users` WHERE `login` = '".$login."' LIMIT 1";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);

  if ($login === $row['login']) {
    $_SESSION['error_login'] = 'Такой логин уже существует';
    $count_error++;
    header("Location: ../pages/register.php");
  } elseif (empty($login)) {
    $_SESSION['error_login'] = 'Логин не может быть пустым';
    $count_error++;
    header("Location: ../pages/register.php");
  }

  $query = "SELECT * FROM `users` WHERE `phone` = '".$phone."' LIMIT 1";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);

  if ($phone === $row['phone']) {
    $_SESSION['error_phone'] = 'Такой номер телефона уже занят';
    $count_error++;
    header("Location: ../pages/register.php");
  } elseif (empty($phone)) {
    $_SESSION['error_phone'] = 'Номер телефона не может быть пустым';
    $count_error++;
    header("Location: ../pages/register.php");
  }

  $query = "SELECT * FROM `users` WHERE `email` = '".$email."' LIMIT 1";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);

  if ($email === $row['email']) {
    $_SESSION['error_email'] = 'Такой email уже занят';
    $count_error++;
    header("Location: ../pages/register.php");
  } elseif (empty($email)) {
    $_SESSION['error_email'] = 'Email не может быть пустым';
    $count_error++;
    header("Location: ../pages/register.php");
  }

  if (empty($password1)) {
    $_SESSION['error_password'] = 'Новый пароль не может быть пустым';
    header("Location: ../pages/register.php");
    exit();
  } 

  if (empty($password2)) {
    $_SESSION['error_password'] = 'Повторный пароль не может быть пустым';
    header("Location: ../pages/register.php");
    exit();
  } 

  if ($password1 === $password2 && $count_error === 0) {
    $password1 = password_hash($password1, PASSWORD_DEFAULT);
    $query = "INSERT INTO `users` (`login`, `phone`, `email`, `password`) VALUES ('".$login."', '".$phone."', '".$email."', '".$password1."')";
    mysqli_query($db, $query);

    $_SESSION['register_ok'] = 'Вы успешно зарегистрировались!';
    header("Location: ../pages/login.php");
  } elseif ($password1 !== $password2) {
    $_SESSION['error_password'] = 'Пароли не совпадают';
    header("Location: ../pages/register.php");
  }
}

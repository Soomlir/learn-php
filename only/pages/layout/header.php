<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../source/styles/styles.css" rel="stylesheet">
  <title>Only - Test task</title>
</head>
<body>
  <div class="wrapper">
    <header class="page-header header">
      <a href="http://only.loc/index.php">
        <img class="page-header__logo" src="../source/images/logo.jpg" width="150" height="75" alt="Логотип компании.">
      </a>
      <nav class="page-header__nav nav">
        <ul class="nav__list nav-list">
          <li class="nav-list__item">
            <a class="nav-list__link" href="http://only.loc/index.php">Главная</a>
          </li>
          <li class="nav-list__item">
            <a class="nav-list__link" href="../pages/about-us.php">О нас</a>
          </li>
          <li class="nav-list__item">
            <a class="nav-list__link" href="../pages/contacts.php">Контакты</a>
          </li>
          <li class="nav-list__item">
            <?php if (isset($_SESSION['username']) && $_SESSION['username'] !== NULL): ?>
              <a class="nav-list__link" href="../pages/profile.php">Кабинет</a>
            <?php endif; ?>
          </li>
          <li class="nav-list__item">
            <?php if (isset($_SESSION['username']) && $_SESSION['username'] !== NULL): ?>
              <span class="green"><?php echo "Добро пожаловать, " . $_SESSION['username']; ?>
              <a class="nav-list__link" href="../backend/logout.php">Выйти</a>
            <?php else: ?>
              <a class="nav-list__link" href="../pages/login.php">Войти</a> 
            <?php endif; ?>
          </li>
        </ul>
      </nav>
    </header>

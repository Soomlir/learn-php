<?php require_once("layout/header.php"); ?>

<main class="page-main">
  <h1 class="page-main__title">Регистрация нового пользователя</h1>

  <form class="page-main__form" action="../backend/register.php" method="post">
    <label for="login">Введите ваш логин:</label><br>
    <input id="login" type="text" name="login" min="4" max="30"><br>
    <p class="error"><?php if (!empty($_SESSION['error_login'])) {
          echo $_SESSION['error_login'];
          unset($_SESSION['error_login']);
         } ?>
    </p>

    <label for="phone">Введите ваш телефон:</label><br>
    <input id="phone" type="tel" name="phone" min="4" max="30"><br>
    <p class="error"><?php if (!empty($_SESSION['error_phone'])) {
          echo $_SESSION['error_phone'];
          unset($_SESSION['error_phone']);
         } ?>
    </p>

    <label for="email">Введите ваш email:</label><br>
    <input id="email" type="email" name="email" min="4" max="30"><br>
    <p class="error"><?php if (!empty($_SESSION['error_email'])) {
          echo $_SESSION['error_email'];
          unset($_SESSION['error_email']);
         } ?>
    </p>

    <label for="password1">Введите ваш пароль:</label><br>
    <input id="password1" type="password" name="password1" min="4" max="30">

    <label for="password2">Введите ваш пароль повторно:</label><br>
    <input id="password2" type="password" name="password2" min="4" max="30">
    <p class="error"><?php if (!empty($_SESSION['error_password'])) {
          echo $_SESSION['error_password'];
          unset($_SESSION['error_password']);
         } ?>
    </p>

    <button name="submit-register" type="submit" value="enter">Зарегестрироваться!</button>

    <p>Есть аккаунт? <a href="../pages/login.php">Войти</a></p>
  </form>
</main>

<?php require_once("layout/footer.php"); ?>
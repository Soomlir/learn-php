<?php require_once("layout/header.php"); ?>

<?php if (isset($_SESSION['username']) and !empty($_SESSION['username'])) {
  header("Location: http://only.loc/index.php");
}
?>

<main class="page-main">
  <h1 class="page-main__title">Авторизоваться</h1>

  <form class="page-main__form" action="../backend/login.php" method="post">
    <label for="login">Введите ваш email или номер телефона:</label><br>
    <input id="login" type="text" name="login" min="4" max="30"><br>

    <label for="password">Введите ваш пароль</label><br>
    <input id="password" type="password" name="password" min="4" max="30">

    <p class="green">
      <?php if(isset($_SESSION['register_ok']) && !empty($_SESSION['register_ok'])) {
        echo $_SESSION['register_ok'];
        unset($_SESSION['register_ok']);
      }
      ?>
    </p>

    <button name="submit" type="submit" value="enter">Войти</button>

    <p class="error"><?php if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
                        echo $_SESSION['error']; unset($_SESSION['error']);
                      } ?>
    </p>

    <p>Нет аккаунта? <a href="../pages/register.php">Зарегистрироваться</a></p>
  </form>
</main>

<?php require_once("layout/footer.php"); ?>
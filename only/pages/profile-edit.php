<?php require_once("layout/header.php"); 
      require_once("../backend/db.php"); 

      $query = "SELECT * FROM `users` WHERE `login` = '".$_SESSION['username']."' LIMIT 1";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
      }
      
?>

<?php if (empty($_SESSION['username'])) {
  header("Location: http://only.loc/index.php");
}
?>

<main class="page-main">
  <h1 class="page-main__title">Редактирование личных данных</h1>
  <a href="../pages/profile.php">Назад</a>

  <form class="page-main__form" action="../backend/profile-edit.php" method="post">
    <p>Ваш логин: <?php echo $_SESSION['login'] = $row['login']; ?></p>

    <label for="login">Ваш новый логин:</label><br>
    <input id="login" type="text" name="login" min="4" max="30" value=""><br>

    <p class="error"><?php if (isset($_SESSION['duplicate_login']) && !empty($_SESSION['duplicate_login'])) {
                echo $_SESSION['duplicate_login'];
                unset($_SESSION['duplicate_login']);
    }
    ?>   
    </p>

    <p>Ваш телефон: <?php echo $_SESSION['phone'] = $row['phone']; ?></p>

    <label for="phone">Ваш новый телефон:</label><br>
    <input id="phone" type="tel" name="phone" min="4" max="30" value=""><br>

    <p class="error"><?php if (isset($_SESSION['duplicate_phone']) && !empty($_SESSION['duplicate_phone'])) {
                echo $_SESSION['duplicate_phone'];
                unset($_SESSION['duplicate_phone']);
    }
    ?>   
    </p>

    <p>Ваш email: <?php echo $_SESSION['email'] = $row['email']; ?></p>

    <label for="email">Ваш новый email:</label><br>
    <input id="email" type="email" name="email" min="4" max="30" value=""><br>

    <p class="error"><?php if (isset($_SESSION['duplicate_email']) && !empty($_SESSION['duplicate_email'])) {
                echo $_SESSION['duplicate_email'];
                unset($_SESSION['duplicate_email']);
    }
    ?>   
    </p>

    <label for="password1">Введите ваш пароль:</label><br>
    <input id="password1" type="password" name="password1" min="4" max="30">

    <label for="password2">Введите ваш новый пароль:</label><br>
    <input id="password2" type="password" name="password2" min="4" max="30">

    <label for="password3">Введите ваш новый пароль повторно:</label><br>
    <input id="password3" type="password" name="password3" min="4" max="30">

    <p class="error">
      <?php if (isset($_SESSION['error_password']) && !empty($_SESSION['error_password'])) {
              echo $_SESSION['error_password']; 
              unset($_SESSION['error_password']);
            }
      ?>
    </p>

    <button name="submit-edit" type="submit" value="enter">Изменить данные</button>
  </form>

</main>

<?php require_once("layout/footer.php"); ?>

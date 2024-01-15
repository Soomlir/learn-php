<?php require_once("layout/header.php"); 
      require_once("../backend/db.php");
if (empty($_SESSION['username'])) {
  header("Location: http://only.loc/index.php");
}

$query = "SELECT * FROM `users` WHERE `login` = '".$_SESSION['username']."' LIMIT 1";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
?>

<main class="page-main">
  <h1 class="page-main__title">Добро пожаловать в секретный Личный кабинет</h1>

  <p class="green">
      <?php if (isset($_SESSION['password_ok']) && !empty($_SESSION['password_ok'])) {
              echo $_SESSION['password_ok']; 
              unset($_SESSION['password_ok']);
            }
      ?>
  </p>

  <p>Ваш логин: <?php echo $row['login'];?></p>
  <p>Ваш номер телефона: <?php echo $row['phone']; ?></p>
  <p>Ваш email: <?php echo $row['email'];?></p>
  <p>Ваши данные, а также пароль вы можете изменить здесь - <a href="../pages/profile-edit.php">Редактировать личные данные</a></p>
</main>

<?php require_once("layout/footer.php"); ?>

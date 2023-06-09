<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="ru">

<!-- ====== HEAD ====== -->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>LearnY - Вход</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" href="img/logo.svg">

  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS / Icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- <script defer src="js/script.js"></script> -->

  
</head>

<!-- ====== BODY ====== -->
<body>
  <!-- === Header === -->
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      
      <a class="navbar-brand" href="/index.php">
        <img src="/img/logo.svg" alt="LearnY" height="32">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/index.php" class="nav-link px-2 ">Главная</a></li>
        <li><a href="/payment.php" class="nav-link px-2 ">Перейти к покупке</a></li>
        <li><a href="/rating.php" class="nav-link px-2 ">Рейтинг учащихся</a></li>
        <li><a href="#" class="nav-link px-2 ">FAQs</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <?php if($_SESSION['user'] == 'yes'){
          echo "<a class='btn btn-outline-primary me-2 logbtn' href='/dashboard.php'>Профиль</a>";
          echo "<a class='btn btn-outline-warning me-2 logbtn' href='/logout.php'>Выйти</a>";
        } else {
          echo "<a class='btn btn-outline-primary me-2 logbtn' href='/login.php'>Войти</a>";
          echo "<a class='btn btn-primary regbtn' href='/register.php'>Регистрация</a>";
        } ?>

      </div>
    </header>
  </div>

  <!-- Form -->
  <div class="container logform mt-4">

    <!-- PHP Query -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "register";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Соединение прервано, передайте это разработчику: " . $conn->connect_error);
    }

    if (isset($_POST["submit"])) {
      $Login = $_POST["login"];
      $Pass = $_POST["pass"];
      $PassHash = md5($pass."fh3287fy43rf");

      // Getting users data to login
      $sql = "SELECT * FROM users WHERE login = '$Login'";
      $result = $conn->query($sql);
      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

      if ($user) {
        if ($PassHash = $user["pass"]) {
          session_start();
          $_SESSION["user"] = "yes";
          $_SESSION["login"] = $Login;
          header("Location: index.php");
          die();
        } else {
          echo "<div class='alert alert-danger'>Пароль не совпадает</div>";
        }
      }else{
        echo "<div class='alert alert-danger'>Логин не совпадает</div>";
      }
    }

    $conn->close();
    ?>

    <!-- Form -->
    <form action="login.php" method="post">
      <div class="form-group">
        <input type="text" name="login" class="form-control" placeholder="Логин">
      </div>
      <div class="form-group">
        <input type="password" name="pass" class="form-control" placeholder="Пароль">
      </div>
      <!-- Submit button -->
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Войти" name="submit">
      </div>
    </form>
    <div class="container"><p>У вас нет аккаунта? <a href="register.php">Зарегистрироваться</a> </p></div>
  </div>


  <!-- Footer -->
  <footer class="text-center fixed-bottom">
    <div class="container mt-1 clinks"> 
      <a class="btn m-1 sbtn" href="#" role="button"><i class="bi bi-github"></i></a>
      <a class="btn m-1 sbtn" href="#" role="button"><i class="bi bi-google"></i></a>
      <a class="btn m-1 sbtn" href="#" role="button"><i class="bi bi-youtube"></i></a>
    </div>

    <!-- Copyright -->
    <div class="text-center p-1 mb-1">
      © 2023 Copyright:
      <a class="text-black" href="#">Learny.com</a>
    </div>
    
  </footer>

</body>

</html>
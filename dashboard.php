<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="ru">

<!-- ====== HEAD ====== -->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>LearnY - Профиль</title>
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
            echo "<a class='btn btn-outline-warning me-2 logbtn' href='/logout.php'>Выйти</a>";
        } else {
            echo "<a class='btn btn-outline-primary me-2 logbtn' href='/login.php'>Войти</a>";
            echo "<a class='btn btn-primary regbtn' href='/register.php'>Регистрация</a>";
        } ?>
      </div>
    </header>
  </div>

<!-- Hero -->
  <div class="hero">
    <div class="container mt-4">
      <h1>Панель управления пользователя</h1>
      <p>
        <?php echo "Добро пожаловать, " . $_SESSION["login"] . ".";?>
      </p>
      <p>
        <a href="/tasks.php"></a>
      </p>
    </div>
  </div>

  <section>
    <div class="container profile py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
                <div class="col-md-4 gradient-custom text-center"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="/img/profile-icon.png"
                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h5><?php echo $_SESSION["login"];?></h5>
                <p>Профиль</p>
                <i class="bi bi-pencil-square mb-5"></i>
                </div>
                <div class="col-md-8">
                <div class="card-body p-4">
                    <h6>Информация</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Email</h6>
                        <p class="text-muted">email@example.com</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Статус курса</h6>
                        <p class="text-muted">Кончается: 20.05.23</p>
                    </div>
                    </div>
                    <h6>Задания</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Последние</h6>
                        <p class="text-muted">Матем. - Задание 5</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Наиболее популярное</h6>
                        <p class="text-muted">Русский - Задание 10</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Tasks -->
    <div class="container mt-4 taskbtn">
        <a class='btn btn-primary logbtn' href='/tasks.php'>Перейти к заданиям</a>
    </div>

    </section>


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
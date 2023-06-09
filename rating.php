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

  <title>LearnY - Главная</title>
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

<!-- Hero -->
  <div class="hero">
    <div class="container mt-4">
      <h1>Рейтинг учащихся с<br>обновляющимися наградами</h1>
      <p>
        Участвовать можно бесплатно, принимают участие все учащиеся школы.
      </p>
    </div>
  </div>

  <section>
    <div class="row tops">
        <div class="col">
            <div class="container pb-5 px-5 h-100">
                <ul class="list-group list-group-numbered">
                    <li class="list-group-item">🏆 Алексей Кузнецов</li>
                    <li class="list-group-item">🏆 Мария Иванова</li>
                    <li class="list-group-item">🏆 Артем Смирнов</li>
                    <li class="list-group-item">🥇 Екатерина Петрова</li>
                    <li class="list-group-item">🥇 Илья Соколов</li>
                    <li class="list-group-item">🥈 Дмитрий Морозов</li>
                    <li class="list-group-item">🥈 Ольга Лебедева</li>
                    <li class="list-group-item">🥈 Павел Киселев</li>
                    <li class="list-group-item">🥈 Игорь Осипов</li>
                    <li class="list-group-item">🥈 Татьяна Александровна</li>
                    <li class="list-group-item">🥉 Андрей Козлов</li>
                    <li class="list-group-item">🥉 Роман Волков</li>
                    <li class="list-group-item">🥉 Елена Никитина</li>
                    <li class="list-group-item">🥉 Валерия Сорокина</li>
                    <li class="list-group-item">🥉 Маргарита Беляева</li>
                </ul>
            </div>
        </div>

        <div class="col">
            <div class="container pb-5 px-5 h-100">
                <ul class="list-group list-group-numbered">
                    <li class="list-group-item">🏆 Алексей Кузнецов</li>
                    <li class="list-group-item">🏆 Екатерина Петрова</li>
                    <li class="list-group-item">🏆 Дмитрий Морозов</li>
                    <li class="list-group-item">🥇 Мария Иванова</li>
                    <li class="list-group-item">🥇 Павел Киселев</li>
                    <li class="list-group-item">🥈 Адрей Козлов</li>
                    <li class="list-group-item">🥈 Игорь Осипов</li>
                    <li class="list-group-item">🥈 Ольга Лебедева</li>
                    <li class="list-group-item">🥈 Илья Соколов</li>
                    <li class="list-group-item">🥈 Валерия Сорокина</li>
                    <li class="list-group-item">🥉 Татьяна Александровна</li>
                    <li class="list-group-item">🥉 Елена Никитина</li>
                    <li class="list-group-item">🥉 Маргарита Беляева</li>
                    <li class="list-group-item">🥉 Артем Смирнов</li>
                    <li class="list-group-item">🥉 Роман Волков</li>
                </ul>
            </div>
        </div>
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
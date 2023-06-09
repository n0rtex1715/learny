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

  <title>LearnY - Оплата курса</title>
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
        <li><a href="#" class="nav-link px-2 ">Перейти к покупке</a></li>
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
      <h1>Выбор тарифа:</h1>
      <h4>Вы также можете выбрать готовый набор ниже</h4>
      
      <div class="tarriff-container">
        <div class="payment-amount" id="paymentAmount">0 &#8381;</div>
        <div class="progress-bar-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
        <div class="items-container">
            <div class="item" data-value="2990" onclick="toggleItem(this)">Русский - Тестовая часть</div>
            <div class="item" data-value="1000" onclick="toggleItem(this)">Русский - Сочинение</div>
            <div class="item" data-value="2750" onclick="toggleItem(this)">Математика. Первая часть (1 - 11 задания)</div>
            <div class="item" data-value="2240" onclick="toggleItem(this)">Математика. Вторая часть (12 - 18 задания)</div>
        </div>
      </div>

    </div>
  </div>


<!-- Cards -->

<div class="container mt-4">
  <div class="row cards">

    <div class="col">
      <div class="card buycard">
        <div class="card-body">
          <p class="card-text">Русский &#40;Тестовая часть&#41; + Математика. Профильный уровень &#40;2023&#41;</p>
          <a href="#" class="btn btn-primary">8.980 &#8381;</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card buycard">
        <div class="card-body">
            <p class="card-text">Русский язык + Сочинение &#40;2023&#41;</p>
            <a href="#" class="btn btn-primary">2.990 &#8381;</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card buycard">
        <div class="card-body">
            <p class="card-text">Математика. Профильный уровень &#40;2023&#41;</p>
            <a href="#" class="btn btn-primary">4.990 &#8381;</a>
        </div>
      </div>
    </div>
  </div>
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

  <script>
    // Calculate and update the payment amount and progress bar
    function updatePaymentAmount() {
      var progressBar = document.getElementById("progressBar");
      var paymentAmount = document.getElementById("paymentAmount");

      var maxAmount = 8980; // Maximum amount
      var selectedItems = document.querySelectorAll(".item.selected");
      var itemCount = selectedItems.length;
      var totalAmount = 0;

      for (var i = 0; i < selectedItems.length; i++) {
        var value = parseInt(selectedItems[i].getAttribute("data-value"));
        totalAmount += value;
      }

      var progress = (totalAmount / maxAmount) * 100; // Calculate the progress in percentage
      progressBar.style.width = progress + "%"; // Update the progress bar width

      paymentAmount.innerHTML = totalAmount + "&#8381;"; // Display the payment amount
    }

    // Toggle the selection of an item
    function toggleItem(item) {
      item.classList.toggle("selected");
      updatePaymentAmount();
    }
  </script>

</body>

</html>
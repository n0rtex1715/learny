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

  <title>LearnY - Русский Язык</title>
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
      <h1>Русский Язык 2023</h1>
    </div>
  </div>

  <section>
    <div class="container mt-4">
    <br>
        <h5>Список активных заданий:</h5>
        <div class="task">
            <p>Тип 9 № 45785:</p>
            <input type="radio" name="mcAnswer" value="option1"> 1&#41; изг..рь, пл..вун (грунт), к..сательная<br>
            <input type="radio" name="mcAnswer" value="option2"> 2&#41; р..гламент, стр..мянный, цв..ток<br>
            <input type="radio" name="mcAnswer" value="option3"> 3&#41; пог..релец, вым..кнуть (под дождём), выр..сти<br>
            <input type="radio" name="mcAnswer" value="option4"> 4&#41; отр..слевой, ур..вень, зап..роть<br>
            <button onclick="checkMultipleChoiceAnswer()">Проверить</button>
            <p id="mcResult"></p>
            <br>
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


  <script>
    // Multiple-choice answer check
    function checkMultipleChoiceAnswer() {
      var mcAnswer = document.querySelector('input[name="mcAnswer"]:checked');
      var mcResult = document.getElementById("mcResult");

      // Compare the selected answer to the correct answer value
      if (mcAnswer && mcAnswer.value === "option2") {
        mcResult.innerHTML = "Верно!";
      } else {
        mcResult.innerHTML = "Неверно <br> Ответ: <br> 1&#41; изгарь (исключение), плывун (грунт) (исключение), касательная  — ЧГ; <br> 2&#41; регламент  — НГ, стремянный (стрЕмя)  — ПГ, цветок (цвЕт)  — ПГ; <br> 3&#41; погорелец, вымокнуть (под дождём), вырасти  — ЧГ; <br> 4&#41; отраслевой (исключение), уровень (исключение), запороть  — ПГ (пОрка);";
      }
    }
  </script>
</body>

</html>
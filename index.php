<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include './_partials/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="./dist/css/master.css">
  <title>PHP DIschi</title>
</head>
<body>
  <header>
    <h1 class="title">PHP DIschi</h1>
  </header>
  <main>
    <div class="container">

    <?php
    foreach ($database as $key) {
    ?>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div
           class="flip-card-front"
           style="background-image: url('<?php echo $key['poster'] ?>')">
          </div>
          <div class="flip-card-back">
            <h2><?php echo $key['title'] ?></h2>
            <p><?php echo $key['author'] ?></p>
            <p><?php echo $key['year'] ?></p>
          </div>
        </div>
      </div>


    <?php
    }
    ?>
   </div>

  </main>



  <!-- <script src="./dist/js/main.js" charset="utf-8"></script> -->
</body>
</html>

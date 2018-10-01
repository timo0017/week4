<?php require_once 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Week 4 - Homepage</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <?php include 'nav.php'; ?>
  </header>
  <main>
    <h1><?php echo greeting(); ?></h1>
    <?php include 'form.html'; ?>
  </main>
  <footer>
  <?php include 'nav.php'; ?>
  </footer>
</body>
</html>
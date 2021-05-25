<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" type="text/css" href="style.css">
<body>

  <?php
  include_once ('includes/database.php');
  include ('includes/registerinc.php');
  session_start();
  ?>
  <header>
  <ul>
<li> <a href="./index.php">
    Index
    <a>
</li>
<li>
    <a href="./login.php">
    Login </a>
</li>
<li>
    <a href="./register.php">
    Register<a>
</li>
</ul>
</header>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>
<body>

<style>
  :root {
    font-family: Arial;
  }
</style>

<form method="get">
  <b>Seleziona il  n° di caratteri della Password</b>
  <br>
  <input type="number" id="length" name="length" min="5" max="20">
  <input type="submit">
</form>

<?php

$length = $_GET['length'];

  function generatePassword($length) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_+=<>?';
      $randomString = '';

      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, strlen($characters) - 1)];
      }

      return $randomString;
  }

  echo generatePassword($length);

?>
  
</body>
</html>

<?php
  session_start();
  if(isset($_GET['length'])) {
    $length = $_GET['length'];
    $_SESSION["password"] = generatePassword($length);
    header('Location: ./pws.php');
  }

  function generatePassword($length) {
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $symbols = "!@#$%^&*()-=_+=<>?";
    $numbers = "0123456789";
    $randomString = '';

    if ($_GET["lowercase"]) {
      $characters .= $lowercase;
    }

    if ($_GET["uppercase"]) {
        $characters .= $uppercase;
    }

    if ($_GET["symbols"]) {
        $characters .= $symbols;
    }

    if ($_GET["numbers"]) {
        $characters .= $numbers;
    }

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
  }
?>
  
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
    $characters = '';

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

    $duplicatedCharacters = array();
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];

        if (!isset($_GET["duplicate"])) {
            while (in_array($randomChar, $duplicatedCharacters)) {
                $randomChar = $characters[rand(0, strlen($characters) - 1)];
            }
        }

        $randomString .= $randomChar;
        $duplicatedCharacters[] = $randomChar;
    }

    return $randomString;
}

?>
  
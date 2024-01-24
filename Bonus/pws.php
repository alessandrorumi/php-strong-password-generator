<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <?php
    session_start();
    $password = $_SESSION["password"];
  ?>
</head>

<style>
  :root {
    font-family: Arial;
  }

  body {
    background-color: #e2e2e2;
  }
</style>

<body>
  <h3 class="text-center mt-5">
    <?php echo "Password generata: $password"; ?>
  </h3>
</body>
</html>

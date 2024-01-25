<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <?php
    require_once __DIR__ . "/functions.php";
    session_start();
  ?>
</head>
<body>

<style>
  :root {
    font-family: Arial;
  }

  body {
    background-color: #e2e2e2;
  }
</style>

<div class="container col-md-6 mt-5">
  <h1 class="text-center">Random Password Generator</h1>
  <form method="get">
    <div class="mb-3 text-center">
      <div class="text-center">
        <input type="range" value="14" min="8" max="20" name="length" oninput="this.nextElementSibling.value = this.value">
        <output>14</output>
      </div>
      <div class="text-center">
        <input class="form-check-input" type="checkbox" name="lowercase" id="lowercase">
        <label class="form-check-label" for="lowercase">Lettere Minuscole</label>
      </div>
      <div class="text-center">
        <input class="form-check-input" type="checkbox" name="uppercase" id="uppercase">
        <label class="form-check-label" for="uppercase">Lettere Maiuscole</label>
      </div>
      <div class="text-center">
        <input class="form-check-input" type="checkbox" name="symbols" id="symbols">
        <label class="form-check-label" for="symbols">Caratteri Speciali</label>
      </div>
      <div class="text-center">
        <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
        <label class="form-check-label" for="numbers">Numeri</label>
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Genera Password</button>
    </div>
  </form>
</div>
  
</body>
</html>

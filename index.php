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

<div class="container col-md-4 mt-5">
  <form method="get">
    <div class="mb-3">
      <label for="length" class="form-label d-block text-center"><b>Seleziona il n° di caratteri della Password</b></label>
      <input type="number" class="form-control" id="length" name="length" min="8" max="20">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Genera Password</button>
    </div>
  </form>

  <h3 class="text-center mt-2"> <?php echo generatePassword($length)?> </h3>
</div>
  
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP</title>
</head>

<body>
  <h1>GET FORM</h1>
  <form action="index.php" method="GET">
    <label for="name"> Enter your name</label><br>
    <input name="name" type="text" /><br>
    <input type="submit" />
  </form>
  <?php
  // When you submit a GET method you can see a change in the url query params in the browser
  $name = $_GET["name"];
  echo "Your name is $name <br>";
  ?>

  <br>
  <br>
  <h1>POST FORM</h1>
  <form action="index.php" method="POST">
    <label for="age"> Enter your age</label><br>
    <input name="age" type="number" /><br>
    <input type="submit" />
  </form>

  <?php

  $age = $_POST["age"];
  echo "Your age is $age";

  ?>
</body>

</html>
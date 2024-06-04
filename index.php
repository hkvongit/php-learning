<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP</title>
</head>

<body>
  <?php

  /*
  This is simple
  Read https://www.w3schools.com/php/php_operators.asp
  for more info.
  */

  $a = 10;
  $b = "10";
  $c = 11;

  echo "<br><br> equals <br>";
  echo var_dump($a == $b);

  echo "<br><br> Identical - equals with same data type <br>";
  echo var_dump($a === $b);

  echo "<br><br> Not equal to <br>";
  echo var_dump($a != $c);



  ?>
</body>

</html>
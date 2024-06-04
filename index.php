<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP</title>
</head>

<body>
  <?php
  $string_variable = "Some string";
  $number_variable = 10;
  $float_variable = 10.002;
  $bool_variable = true;
  $null_variable = NULL;

  echo "My brothers age is $number_variable <br/>";

  // Knowing the data type of a variable
  echo var_dump($string_variable);

  echo "<br><br>";


  // Setting constants
  echo "CONSTANTS";
  define("PI", 3.14);
  echo PI;

  echo "<br>";

  define("PI", 4);
  echo PI; // You can see value is still 3.14, we cannot change the value of a constant.
  

  ?>
</body>

</html>
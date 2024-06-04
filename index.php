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

and 	And 	$x and $y 	True if both $x and $y are true 	
or 	Or 	$x or $y 	True if either $x or $y is true 	
xor 	Xor 	$x xor $y 	True if either $x or $y is true, but not both 	
&& 	And 	$x && $y 	True if both $x and $y are true 	
|| 	Or 	$x || $y 	True if either $x or $y is true 	
! 	Not 	!$x 	True if $x is not true
  */

  $a = 10;
  $b = 50;

  echo "<br> <br> AND operator <br>";
  echo var_dump($a == 10 and $b == 50);
  echo "<br>";
  echo var_dump($a == 10 && $b == 50);

  echo "<br> <br> OR operator <br>";
  echo var_dump($a == 5 or $b == 50);
  echo "<br>";
  echo var_dump($a == 5 || $b == 50);

  echo "<br> <br> XOR (Neither true) operator <br>";
  echo var_dump($a == 5 xor $b == 5);
  echo "<br>";
  echo var_dump($a == 10 xor $b == 5);

  echo "<br> <br> Not operator <br>";
  echo var_dump($a != 5);

  ?>
</body>

</html>
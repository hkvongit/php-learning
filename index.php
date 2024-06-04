<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP</title>
</head>

<body>
  <?php

  $a = 4;
  $b = $a > 5 ? "a is greater than 5" : "a is less than or equal to 5";
  echo $b;

  echo "<br>";
  $k = 100;
  if ($k > 100) {
    echo "k is greater than 100";
  } else if ($k = 100) {
    echo "k is 100";
  } else {
    echo "k is less than 100";
  }


  ?>
</body>

</html>
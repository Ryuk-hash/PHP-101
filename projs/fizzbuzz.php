<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Doc</title>
</head>
<body>
<?php 
  for ($i=1; $i <= 100; $i++){
    if (($i % 3 == 0) && ($i % 5 == 0)) {
      echo 'FIZZ BUZZ';
    } elseif ($i % 3 == 0) {
      echo 'FIZZ';
    } elseif ($i % 5 == 0) {
      echo 'BUZZ';
    } else {
      echo "$i";
    }
    echo '<br>';
  }
?> 
</body>
</html>
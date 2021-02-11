<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Doc</title>
</head>
<body>
  <form method="POST">
    <label>Please choose Heads or Tails: <br></label>

    <input type="radio" name="ht" value="heads">
    <label for="heads">Heads</label>

    <input type="radio" name="ht" value="tails">
    <label for="tails">Tails</label>

    <input type="submit" name="submit" value="Submit">
  </form>

<?php 

if (isset($_POST['submit'])) {
  $input = $_POST['ht'];

  $randomInt = rand(0, 1);
  $toss = array(0=>"heads", 1=>"tails");

  $computer = $toss[$randomInt];

  $computer == $input ? $ans = 'You win!' : $ans = 'You lose!';

  echo "You chose $input and the toss was $toss[$randomInt]";
  echo "<br> $ans";


}

?> 
</body>
</html>
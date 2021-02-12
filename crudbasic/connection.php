<?php 

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'crudbasic';

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
  ?>
  <script>setTimeout(() => {alert("DB Connection Successful!")}, 1000);</script>
  <?php
} else {
  echo 'connection failed!';
}
?>
<?php

include "connection.php";

$getId = $_GET['id'];

$deleteQuery = "DELETE from registrations WHERE id=$getId";

$query = mysqli_query($con, $deleteQuery);

if ($query) {
  echo '<script type="text/javascript">'; 
  echo 'alert("Record deleted successfully!");'; 
  echo 'window.location.href = "results.php";';
  echo '</script>';
} else {
  echo '<script type="text/javascript">'; 
  echo 'window.location.href = "results.php";';
  echo 'alert("Failed to delete record!");'; 
  echo '</script>';
}
?>
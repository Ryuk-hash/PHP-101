<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <?php include 'links.php'; ?>
  <style>
    .navbar-brand {
      padding: 10px;
      background-color: #eee;
      border-radius: 15px;
      text-transform: uppercase;
    }
  
    .navbar-brand:hover {
      color: white;
      background-color:cyan;
      transition: all 0.3s;
      transform: scale(1.1);
    }
  </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Home</a>
    <a class="navbar-brand" href="form.php">Fill Job Application Form</a>
    <a class="navbar-brand" href="results.php">List of Registrations</a>
  </div>
</nav>
</body>
</html>
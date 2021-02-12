<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "links.php" ?>
  <title>Registrations</title>
  <style>
    .something {
      display: flex;
      justify-content: center;
      padding: 20px;
      height: 100vh;
      background: rgb(169,39,30);
      background: linear-gradient(38deg, rgba(169,39,30,1) 23%, rgba(107,71,44,1) 39%, rgba(21,115,101,1) 61%, rgba(9,121,65,1) 64%, rgba(0,212,255,1) 100%);
    }

    h2 {
      color: #eee;
    }

    td {
      cursor: pointer;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .fa {
      cursor: pointer;
      box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
    }

    .fa.fa-trash {
      color: #c9aa88 ;
    }

    .fa:hover {
      transition: color 0.2s;
      color: #FF00FF;
    }

    .style-email {
      background-color: #e9e9e9;
      border-radius: 50px;
      padding: 8px;
      box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;         }

  </style>
</head>
<body>
<div class="something">
<div class="container-fluid">
  <div class="text-center">
    <h2 class="my-5">List of Registrations</h2>  
  </div>

  <div class="ta">
    <table class="table table-hover table-striped table-light">
      <thead class="table-info">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Qualification</th>
          <th scope="col">Mobile Number</th>
          <th scope="col">Email</th>
          <th scope="col">Referrer</th>
          <th scope="col">Job Profile</th>
          <th scope="col" colspan="2">Operations</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'connection.php';

        $selectQuery = "SELECT * from registrations";

        $query = mysqli_query($con, $selectQuery);

        $nums = mysqli_num_rows($query);

        while ($res = mysqli_fetch_array($query)) {
          ?>
          <tr>
            <th scope="row"><?php echo $res['id']; ?></th>
            <td><?php echo $res['Name']; ?></td>
            <td><?php echo $res['Qualification']; ?></td>
            <td><?php echo $res['MobileNumber']; ?></td>
            <td><span class="style-email"><?php echo $res['Email']; ?></span></td>
            <td><?php echo $res['Referrer']; ?></td>
            <td><?php echo $res['JobProfile']; ?></td>
            <td><a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-edit"></i></a></td>
            <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></a></i></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>

  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>

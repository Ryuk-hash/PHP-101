<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "links.php" ?>
  <title>Job Application</title>
</head>

<body>

  <div class="container-fluid register">
    <div class="row vh-100">

      <div class="col-md-6">
        <div class="left_side h-100">
          <img alt="Dashboard-image" src="assets/display2.jpg">
        </div>
      </div>

      <div class="col-md-6 bg-set">
        <div class="right_side h-100 pt-5">
          <div class="main_heading">
            <h1>SUBMIT JOB APPLICATION</h1>
          </div>

          <div class="container form_area py-5">
            <form action="" method="POST">
              <div class="row mb-4">

                <div class="col stuff p-2">
                  <label for="name" class="form-label">Name*</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="John Doe . . ." required>
                </div>

                <div class="col ml-2 stuff p-2">
                  <label for="qualification" class="form-label">Qualification*</label>
                  <input type="text" class="form-control" id="qualification"
                    placeholder="12th | College | Masters . . ." name="qualification" required>
                </div>
              </div>

              <div class="row mb-4">

                <div class="col stuff p-2">
                  <label for="mobilenumber" class="form-label">Mobile Number*</label>
                  <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="9876543210" required>
                </div>

                <div class="col ml-2 stuff p-2">
                  <label for="email" class="form-label">Email Address*</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="johndoe@gmail.com" required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col stuff p-2">
                  <label for="references" class="form-label">References</label>
                  <input type="text" class="form-control" id="references" name="references" placeholder="Any References . . .">
                </div>
              </div>

              <div class="row mb-4">
                <div class="col stuff p-2">
                  <label for="jobprofile" class="form-label">Job Profile</label><br>
                  <select class="form-select w-100 p-2" id="jobprofile" name="jobprofile">
                    <option selected value="webdev">Web Developer</option>
                    <option value="mlengineer">Machine Learning Engineer</option>
                    <option value="softwareengineer">Software Engineer</option>
                    <option value="contentmanager">Content Manager</option>
                  </select>
                </div>
              </div>

              <div class="row w-100">
                <button type="submit" name="submit" class="btn btn-primary w-50 mt-2 mx-auto p-2">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

<?php 
include "connection.php";


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mobilenumber = $_POST['mobilenumber'];
  $qualification = $_POST['qualification'];
  $references = $_POST['references'];
  $email = $_POST['email'];
  $jobprofile = $_POST['jobprofile'];

  $query = "INSERT INTO `registrations`(`Name`, `Qualification`, `MobileNumber`, `Email`, `Referrer`, `JobProfile`) VALUES ('$name', '$qualification', '$mobilenumber', '$email', '$references', '$jobprofile')";

  $res = mysqli_query($con, $query);

  if ($res) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Data inserted successfully!");'; 
    echo 'window.location.href = "home.php";';
    echo '</script>';
  } else {
    echo '<script type="text/javascript">'; 
    echo 'window.location.href = "home.php";';
    echo 'alert("Failed to insert data!");'; 
    echo '</script>';
  }
}
?>
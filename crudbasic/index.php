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
            <form>
              <div class="row mb-4">

                <div class="col stuff p-2">
                  <label for="name" class="form-label">Name*</label>
                  <input type="text" class="form-control" id="name" placeholder="John Doe . . ." required>
                </div>

                <div class="col ml-2 stuff p-2">
                  <label for="qualification" class="form-label">Qualification*</label>
                  <input type="text" class="form-control" id="qualification"
                    placeholder="12th | College | Masters . . ." required>
                </div>
              </div>

              <div class="row mb-4">

                <div class="col stuff p-2">
                  <label for="mobilenumber" class="form-label">Mobile Number*</label>
                  <input type="text" class="form-control" id="mobilenumber" placeholder="9876543210" required>
                </div>

                <div class="col ml-2 stuff p-2">
                  <label for="email" class="form-label">Email Address*</label>
                  <input type="email" class="form-control" id="email" placeholder="johndoe@gmail.com" required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col stuff p-2">
                  <label for="references" class="form-label">References</label>
                  <input type="text" class="form-control" id="references" placeholder="Any References . . .">
                </div>
              </div>

              <div class="row mb-4">
                <div class="col stuff p-2">
                  <label for="jobprofile" class="form-label">Job Profile</label><br>
                  <select class="form-select w-100 p-2" id="jobprofile">
                    <option selected value="webdev">Web Developer</option>
                    <option value="mlengineer">Machine Learning Engineer</option>
                    <option value="softwareengineer">Software Engineer</option>
                    <option value="contentmanager">Content Manager</option>
                  </select>
                </div>
              </div>

              <div class="row w-100">
                <button type="submit" class="btn btn-primary w-50 mt-2 mx-auto p-2">SUBMIT</button>
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
?>
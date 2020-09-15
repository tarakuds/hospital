<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="index.php"> SMH MEDICALS</a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="index.php">Home</a>
    <?php if(!isset($_SESSION['loggedIn']) && empty($_SESSION['loggedIn'])){?>
  
    <a class="p-2 text-dark" href="login.php">Login</a>
    <a class="btn btn-primary" href="reg.php">Register</a>
    <a class="p-2 text-dark" href="forgot.php">Forgot Password</a>
    <?php  }else{  ?>
      <?php if($_SESSION['role'] == "Super Admin"){ ?>
              <a class="p-2 text-dark" href="addnew.php">Add New User</a>
              <a class="p-2 text-dark" href="viewstaff.php">View Staffs</a>
              <a class="p-2 text-dark" href="viewpatients.php">View All Patients</a>
      <?php }elseif ($_SESSION['role'] == "Patient") {?>
        <a class="p-2 text-dark" href="paybill.php">Pay Bill</a>
        <a class="p-2 text-dark" href="book_appointment.php">Book Appointment</a>
        <a class="p-2 text-dark" href="view_appointment.php">View Appointment</a>
        <?php }elseif ($_SESSION['role'] == "Medical Team(MT)") {?>
        <a class="p-2 text-dark" href="#">View all appointments</a>
        <a class="p-2 text-dark" href="#">View All Patients</a>
        <?php }?>
      <a class="p-2 text-dark" href="reset.php">Reset Password</a>
      <a class="p-2 text-dark" href="logout.php">Logout</a>
      <?php }?>
  </nav>
</div>
</body>
</html>
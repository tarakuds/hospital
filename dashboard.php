<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SNH</title>
</head>
<body>
<?php
        include('nav/nav.php');
        require_once('function/redirect.php');
        //using the $_POST
         if(!isset($_SESSION['loggedIn'])){
          redirect_to("login.php");
         }else{
             redirect_to("dashboard.php");
         }    
?> <h2>SUPER ADMIN DASHBOARD</h2>
    <P>Welcome<?php echo $_SESSION['name'];?>. Your are logged in as<?php echo $_SESSION['role'] ?>with ID:<?php echo $_SESSION['loggedIn'] ?></P>
    <p>Your department is:<?php echo $_SESSION['dept'];  ?></p>

    <p>You registered On:<?php echo $_SESSION['regdate'];  ?>and your last login was:<?php  echo $_SESSION['login_time'];  ?></p>
</body>
</html>
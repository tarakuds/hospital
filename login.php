<?php
   // include("function/redirect.php");

    include("nav/nav.php");
    
    require_once("function/error.php");

    if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
        redirect_to("dashboard.php");
         }
    
    //forLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | SNH</title>
</head>
<body>
    <main>
    
        <div class="container">
        <div class="row col-8">
            <h2>LOGIN</h2>
            
        </div>
        <p>
            <?php

        // if(isset($_SESSION['message']) && !empty($_SESSION['message'])) {
        //     echo "<span style='color:green'>".$_SESSION['message']."</span>";

        //     session_destroy();
        // }

        //         if(isset($_SESSION['info']) && !empty($_SESSION['info'])) {
        //             echo "<span style='color:blue'>".$_SESSION['info']."</span>";
        //            session_destroy();
        //         }
                errorinfo();
                
                ?>
    </p>
        <p>Today is <?php
                    $lastLoginDate = date("Y/m/d "."h:i:sa");
                    echo $lastLoginDate;

                ?> and the time now is:
                <?php
                    date_default_timezone_set("America/New_York");
                    echo date("h:i:sa");
                ?>             
            
            </p>
        <div class="row col-6">
                <form action="process_login.php" method="post">
                
                <?php
                //using the $_POST
                // if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                //     echo "<span style='color:red'>".$_SESSION['error']."</span>";
                //    session_destroy();
                // }
                    errorinfo();
               ?>
               

                    <p>
                        <label class="label" for="email">Email</label>
                        <input type="email"
                        <?php if(isset($_SESSION['mail'])){ echo "value=" .$_SESSION['mail'];} ?> class="form-control" name="mail" id="email" placeholder="what is your email?">
                    </p>
                    
                    <p>
                        <label class="label" for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Provide your password">
                    </p>
                

                        <button type="submit" class="btn btn-sm btn-primary">LOGIN</button><br>
                        <a href="forgot.php">Forgot Password</a>
                    <p for="register">Dont have an accout?<a href="reg.php">Register Here</a> </p> 
                </form>
        </div>
        </div>
    </main>
</body>
</html>
<?php
    include("nav/nav.php");

    require_once("function/error.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESET | SNH</title>
</head>
<body>
    <main>
    
        <div class="container">
        <div class="row col-8">
            <h2>Reset PASSWORD</h2>
            
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
        <div class="row col-6">
                <form action="forgot_process.php" method="post">
                
                <?php
                    errorinfo();
               ?>
               

                    <p>
                        <label class="label" for="email">Email</label>
                        <input type="email"
                        <?php if(isset($_SESSION['mail'])){ echo "value=" .$_SESSION['mail'];} ?> class="form-control" name="mail" id="email" placeholder="what is your email?">
                    </p>
                

                        <button type="submit" class="btn btn-sm btn-primary">RESET</button><br>
                        <a href="forgot.php">Forgot Password</a>
                    <p for="login">login instead &nbsp;<a href="login.php"> Here</a> </p> 
                </form>
        </div>
        </div>
    </main>
</body>
</html>
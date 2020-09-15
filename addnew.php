
<?php
    include('nav/nav.php');
    include("function/redirect.php");
    require_once("function/error.php");
    

    // if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
    //     redirect_to("dashboard.php");
    // }
    //forLogin();

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add New User | SNH </title>
</head>
<body>

    <main>
    <div class= "container">
        <div class="row col-6">
            <h2>ADD NEW USER ACCOUNT HERE</h2>
        </div>
        <div class="row col-6">
            <P>Welcome, kindly input correct information</P>
            <p>All form fields are required</p>
        </div>    
            
        <div class="row col-6">
            <form action="process_addnew.php" method="POST">

                <?php errorinfo();?>

                <p>
                    <label class="label" for="fname">Firstname</label>
                    <input type="text"
                        <?php
                        //retaining inputted values
                        if(isset($_SESSION['fname']) && !empty($_SESSION['fname'])){
                                echo "value=".$_SESSION['fname'];
                        }                               
                        ?>
                     class="form-control" name="fname" id="firstname" placeholder="Please input your firstname">                
                </p>
            
                <p>
                    <label class="label" for="lname">Lastname</label>
                   

                    <input type="text"
                    <?php 
                        if(isset($_SESSION['lname'])){
                            echo "value=".$_SESSION['lname'];
                        }  ?> class="form-control" name="lname" id="lastname" placeholder="Please input your lastname">
                </p>

                <p>
                <label class="label" for="mail">Email</label>
                <input type="text" <?php 
                        if(isset($_SESSION['mail'])){
                            echo "value =".$_SESSION['mail'];
                        } ?> class="form-control" name="mail" id="email" placeholder="Please input your email address">
                </p>

                <!-- <p>
                    <label class="label" for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Input a password">
                </p> -->

                <p>
                    <label class="label" for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="">Select gender</option>
                        <option <?php
                            if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                                echo "selected";
                            }  
                        ?>>Female</option>
                        <option <?php
                            if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                                echo "selected";
                            }  
                        ?> >Male</option>
                    </select>
                </p>

                <p>
                    <label class="label" for="designation">Designation</label>
                    <select class="form-control" name="designation" id="designation">
                        <option value="">Select a designation</option>
                        <option <?php
                            if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Medical Team(MT)'){
                                echo "selected";
                            }  
                        ?> >Medical Team(MT)</option>
                        
                        <option <?php
                            if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Super Admin'){
                                echo "selected";
                            }  
                        ?>>Super Admin</option>
                        <option <?php
                            if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Patient'){
                                echo "selected";
                            }  
                        ?>>Patient</option>
                        
                    </select>
                </p>

                <p>
                    <label class="label" for="department">Department</label>
                    <input type="text" <?php 
                        if(isset($_SESSION['department'])&& !empty($_SESSION['department'])){
                            echo "value=".$_SESSION['department'];
                        }  ?> class="form-control" name="department" id="department" placeholder="Let know your department">
                </p>

                <!-- <input type="submit" value="SUBMIT"> -->
                <button type="submit" name="submit" class="btn btn-success">REGISTER</button><br>
                <a href="forgot.php">Forgot Password</a>
                <p for="login">Already have an accout?<a href="login.php">Login Here</a> </p> 

            </form>
        </div>
    </div>
   </main>
</body>
</html>
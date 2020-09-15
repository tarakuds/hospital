
<?php
    include('nav/nav.php');
    include("function/redirect.php");
    require_once("function/error.php");
    //include_once("process_login.php");
    

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
    <title> Book Appointment | SNH </title>
</head>
<body>

    <main>
    <div class= "container">
        <div class="row col-6">
            <h2>BOOK YOUR APPOINTMENT WITH A  MEDICAL TEAM</h2>
        </div>
        <div class="row col-6">
            <!-- <P>Welcome, kindly input correct information</P> -->
            <p>All form fields are required</p>
        </div>    
            
        <div class="row col-6">
            <form action="process_appointment.php" method="POST">

                <?php 
                    //errorinfo();    
                ?>

                        <h2>Hi <?php echo $_SESSION['name'];  ?> proceed with your appointment booking</h2>
               <p>
                    <label for="appointment_date">Date of Appointment:</label>
                    <input <?php
                            if(isset($_SESSION['appointment_date'])){
                                echo "value=".$_SESSION['appointment_date'];
                             }  
                        ?> type="date" name="appointment_date" id="">
                </p>

                <p>
                    <label for="appointment_time">Time of Appointment:</label>
                    <input
                    <?php
                            if(isset($_SESSION['appointment_time'])){
                                echo "value=".$_SESSION['appointment_time'];
                             }  
                        ?> type="time" name="appointment_time" id="">
                </p>

                <p>
                <label for="appointment_nature">Nature Of Appointment</label>
                <select class="form-control" name="appointment_nature" id="">
                        <option value="">Select Department</option>
                        <option <?php
                        if(isset($_SESSION['appointment_nature']) && $_SESSION['appointment_nature'] =='Emergency'){
                                echo "selected";
                             } ?>>Emergency</option>
                        <option <?php
                        if(isset($_SESSION['appointment_nature']) && $_SESSION['appointment_nature'] =='Family clinic'){
                                echo "selected";
                             } ?>>Family clinic</option>
                        <option <?php
                        if(isset($_SESSION['appointment_nature']) && $_SESSION['appointment_nature'] =='General checkup'){
                                echo "selected";
                             } ?>>General checkup</option>
                        <option <?php
                        if(isset($_SESSION['appointment_nature']) && $_SESSION['appointment_nature'] =='Anti - natal'){
                                echo "selected";
                             } ?>>Anti - natal</option>
                        <option <?php
                        if(isset($_SESSION['appointment_nature']) && $_SESSION['appointment_nature'] =='Immunization'){
                                echo "selected";
                             } ?>>Immunization</option>
                </select>
                </p>

                <p>
                    <label class="label" for="medical_department">Department</label>
                    <select class="form-control" name="medical_department" id="">
                        <option value="">Select Department</option>
                        <option <?php
                            if(isset($_SESSION['medical_department']) && $_SESSION['medical_department'] =='Physiotheraphy'){
                                echo "selected";
                             } ?> >Physiotheraphy</option>                        
                        <option 
                        <?php
                            if(isset($_SESSION['medical_department']) && $_SESSION['medical_department'] =='Dentist'){
                                echo "selected";
                             } ?>>Dentist</option>
                        <option <?php
                        if(isset($_SESSION['medical_department']) && $_SESSION['medical_department'] =='Optics'){
                                echo "selected";
                             } ?>>Optics</option>
                        <option <?php
                        if(isset($_SESSION['medical_department']) && $_SESSION['medical_department'] =='Dermatology'){
                                echo "selected";
                             } ?>>Dermatology</option>
                        <option <?php
                        if(isset($_SESSION['medical_department']) && $_SESSION['medical_department'] =='ENT'){
                                echo "selected";
                             } ?>>ENT</option>
                    </select>
                </p>
                
                <p for="complaint">
                <label for="complaint">Initial Complaint:</label></p>
                <p><textarea name="complaint" id="" cols="30" rows="5"></textarea></p>
        
                             
                <button type="submit" name="book_submit" class="btn btn-success">Book Appointment</button><br>
               
            </form>
        </div>
    </div>
   </main>
</body>
</html>     
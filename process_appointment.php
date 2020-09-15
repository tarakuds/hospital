<?php
    //session_start();
    //include("function/redirect.php");
    include_once("process_login.php");
 
    //REGISTRATION FORM VALIDATION
    $errorCount= 0;
    // $patient_name=$_POST['patient'] != ""? $_POST['patient']:$errorCount++;
    $appointment_date = $_POST['appointment_date'] != ""? $_POST['appointment_date']:$errorCount++;
    $appointment_time = $_POST['appointment_time'] != ""? $_POST['appointment_time']:$errorCount++;
    $appointment_nature= $_POST['appointment_nature'] != ""? $_POST['appointment_nature']:$errorCount++;    
    $medical_department = $_POST['medical_department'] != ""? $_POST['medical_department']:$errorCount++;
    $complaint =$_POST['complaint'] != ""? $_POST['complaint']:$errorCount++;

    // $_SESSION['patient']=  $patient_name;
    $_SESSION['appointment_date']=$appointment_date;
    $_SESSION['appointment_time']=$appointment_time;
    $_SESSION['appointment_nature']=$appointment_nature;
    $_SESSION['medical_department']=$medical_department;
    $_SESSION['complaint']=$complaint;
                      

    if($errorCount>0){
        $sessionError =' You have '.$errorCount.' error';

        if($errorCount>1){
            $sessionError .= "s";
        }
        $sessionError .= ' in your submission. You should review';
        $_SESSION['error'] = $sessionError;
        redirect_to("book_appointment.php");
    }
    else{
      
        //declaring array objects
        $appointment_details= [
            'patientid'=>$_SESSION['loggedIn'],
            'patients_name'=>$_SESSION['name'],
            'appointment_time'=>$appointment_time,
            'appointment_date' => $appointment_date,
            'appointment_nature' => $appointment_nature,
            'complaint' =>$complaint, 
            'medical_department' => $medical_department        
        ];

        

        // for($counter=0; $counter < $appointments; $counter++){
        //     $currentUser = $allUsers[$counter];
        //     if($currentUser === $mail.".json"){
        //         $_SESSION['info']= 'User already exists! Try again with correct values';
        //         redirect_to("reg.php");
        //         die();
        //     }
        //}


            //specifying location to store data
        file_put_contents("db/appointments/".$_SESSION['name']."-".$_SESSION['loggedIn'].".json",json_encode($appointment_details));
        $_SESSION['message'] = 'Your appointment was successfully booked. ';
        redirect_to("dashboard_patient.php"); 
    }
?>
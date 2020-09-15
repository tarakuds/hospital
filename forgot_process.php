<?php
session_start();
include("function/redirect.php");
 
//REGISTRATION FORM VALIDATION
$errorCount= 0;

$email = $_POST['mail'];
$_SESSION['mail']=$email;
//echo "you email is ".$email;
if($errorCount>0){
    $sessionError =' You have '.$errorCount.' error';

    if($errorCount>1){
        $sessionError .= "s";
    }
    $sessionError .= ' in your submission. You should review.';
    $_SESSION['error'] = $sessionError;
    redirect_to("reset.php");
}
else{


$allUsers = scandir("db/users/");
$countUser=count($allUsers);

for($counter=0; $counter < $countUser; $counter++){
    $currentUser = $allUsers[$counter];

    if($currentUser == $email.".json"){
                        
      /* $userObject = json_decode(file_get_contents("db/users/".$currentUser));         
        $emailFromDB =$userObject->mail;
        echo $emailFromDB;
        $emailFromUser=$email;
        if($emailFromDB === $emailFromUser){
             $_SESSION['message'] = "a reset mail has been sent to your email";
           redirect_to("login.php");
        }*/

        //to mail trap

           $subject = "Password Reset Link";
            $message = "A password reset has been requested by you"."use the link: <a>localhost/SNHospital/password_reset.php</a>";
            $header = "From: admin@snhospital.com" ."\r\n"."CC: sombody@example.com";

            $try = mail($email,$subject,$message,$header);
                
          
        if($try){
            
           $_SESSION['error'] = "a reset mail has been sent to your email";
           redirect_to("login.php");
              
        }else{
            $_SESSION['error']="something went wrong";
            redirect_to("reset.php");

        }
        die();
        
    }/*else{
        $_SESSION['info']="Invalid Email";
        redirect_to("reset.php");
    }*/
}
$_SESSION['error'] = 'The email:  '.$email." Is not registered with us";
        redirect_to("reset.php"); 
}

?>
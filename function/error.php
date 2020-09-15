<?php
    //session_start();
    require_once("function/redirect.php");

   function errorinfo(){
    $type = ['message','info','error'];

    //making the colours dynamic and specific to th kind of message displayed
    $color = ['green', 'blue', 'red'];

    for($i=0; $i< count($type); $i++){
        if(isset($_SESSION[$type[$i]]) && !empty($_SESSION[$type[$i]])){
            echo "<span style='color:".$color[$i]."'>".$_SESSION[$type[$i]]."</span>";
            session_unset();
            session_destroy(); 
        } 
        
    }
    
}

    function forLogin(){
        if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
            redirect_to("dashboard.php");
        }
    }

?>
<?php
    session_start();
    require_once("function/error.php");
    // if(!isset($_SESSION['loggedin'])){
    //     header("Location: dashboard.php");
    // }

            forLogin();


    session_unset();
    session_destroy();

    header("Location: login.php")
?>
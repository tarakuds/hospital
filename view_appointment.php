<?php
    //include_once("process_appointment.php");

    scandir("db/appointments/");

    $appointments = json_decode(file_get_contents("db/appointments"));

    echo $appointments;

//echo $appointment_details;
?>